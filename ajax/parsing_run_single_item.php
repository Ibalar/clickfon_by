<?php

require_once 'api/Turbo.php';

class ParsingRunSingleItemAjax extends Turbo
{
    public function run()
    {
        header('Content-Type: application/json');

        // Получить ID item из GET параметра
        $itemId = $this->request->get('id', 'integer');

        // Валидация
        if (empty($itemId)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Не указан ID URL'
            ]);
            return;
        }

        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Недостаточно прав доступа'
            ]);
            return;
        }

        // Загрузить item
        $item = $this->getItem($itemId);
        if (!$item) {
            echo json_encode([
                'status' => 'error',
                'message' => 'URL не найден'
            ]);
            return;
        }

        // Загрузить source
        $source = $this->parsing->getSource($item->parsing_source_id);
        if (!$source) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Источник не найден'
            ]);
            return;
        }

        if (!$source->is_active) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Источник отключен'
            ]);
            return;
        }

        // Запустить парсинг
        try {
            set_time_limit(60);

            $result = $this->parseItem($item, $source);

            echo json_encode($result);
        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Ошибка при парсинге: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Получить item по ID
     */
    private function getItem($itemId)
    {
        if (empty($itemId)) {
            return false;
        }

        $query = $this->db->placehold(
            "SELECT 
                id, parsing_source_id, article_reference, url, 
                parsed_price, status, last_error, last_parsed_at,
                created_at, updated_at
            FROM __parsing_items
            WHERE id = ?
            LIMIT 1",
            (int) $itemId
        );

        $this->db->query($query);

        return $this->db->result();
    }

    /**
     * Парсить один item
     */
    private function parseItem($item, $source)
    {
        // Лог начала парсинга
        $this->parsing->createLog(
            (int) $source->id,
            (int) $item->id,
            'parse_item_start',
            'Parsing item: ' . $item->article_reference
        );

        try {
            // Парсим URL
            $parseResult = $this->parsing->parseUrl(
                $item->url,
                $source->selector_price,
                $source->selector_article
            );

            if ($parseResult['status'] == 'error') {
                // Обновить item как ошибка
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                    $parseResult['error'],
                    (int) $item->id
                );

                return [
                    'status' => 'error',
                    'message' => $parseResult['error']
                ];
            }

            $parsedPrice = $parseResult['price'];
            $parsedArticle = $parseResult['article'];

            // Проверить соответствие артикула
            if ($parsedArticle && $parsedArticle != $item->article_reference) {
                $error = "Article mismatch: expected '{$item->article_reference}', got '{$parsedArticle}'";
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                    $error,
                    (int) $item->id
                );

                return [
                    'status' => 'error',
                    'message' => $error
                ];
            }

            // Проверить границы цены
            if ($source->price_min_bound !== null && $parsedPrice < $source->price_min_bound) {
                $error = "Price below minimum bound: {$parsedPrice} < {$source->price_min_bound}";
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = NOW() WHERE id = ?",
                    $error,
                    $parsedPrice,
                    (int) $item->id
                );

                return [
                    'status' => 'error',
                    'message' => $error
                ];
            }

            if ($source->price_max_bound !== null && $parsedPrice > $source->price_max_bound) {
                $error = "Price above maximum bound: {$parsedPrice} > {$source->price_max_bound}";
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = NOW() WHERE id = ?",
                    $error,
                    $parsedPrice,
                    (int) $item->id
                );

                return [
                    'status' => 'error',
                    'message' => $error
                ];
            }

            // Найти variant по SKU
            $this->db->query("SELECT id, product_id, price FROM __variants WHERE sku = ? LIMIT 1", $item->article_reference);
            $variant = $this->db->result();

            if (!$variant) {
                $error = 'Variant not found';
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'not_found', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                    $error,
                    (int) $item->id
                );

                return [
                    'status' => 'error',
                    'message' => $error
                ];
            }

            // Обновить цену только если спарсенная цена ниже
            $priceUpdated = false;
            $oldPrice = $variant->price;

            if ($parsedPrice < $variant->price) {
                // Обновить цену variant
                $this->db->query(
                    "UPDATE __variants SET price = ? WHERE id = ?",
                    $parsedPrice,
                    (int) $variant->id
                );

                // Обновить denormalized статистику продукта
                $this->variants->updateProductVariantStats($variant->product_id);

                // Лог обновления цены
                $this->parsing->createLog(
                    (int) $source->id,
                    (int) $item->id,
                    'price_updated',
                    "Price updated for {$item->article_reference}: {$oldPrice} -> {$parsedPrice}",
                    $oldPrice,
                    $parsedPrice,
                    (int) $variant->product_id
                );

                $priceUpdated = true;
            }

            // Обновить статус item
            $this->db->query(
                "UPDATE __parsing_items SET status = 'parsed', parsed_price = ?, last_error = NULL, last_parsed_at = NOW() WHERE id = ?",
                $parsedPrice,
                (int) $item->id
            );

            return [
                'status' => 'ok',
                'message' => $priceUpdated ? 'Price updated' : 'Parsed successfully',
                'price' => $parsedPrice,
                'price_updated' => $priceUpdated,
                'old_price' => $priceUpdated ? $oldPrice : null
            ];
        } catch (Exception $e) {
            $this->db->query(
                "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                $e->getMessage(),
                (int) $item->id
            );

            $this->parsing->createLog(
                (int) $source->id,
                (int) $item->id,
                'error',
                'Parse error: ' . $e->getMessage()
            );

            return [
                'status' => 'error',
                'message' => $e->getMessage()
            ];
        }
    }
}

$ajax = new ParsingRunSingleItemAjax();
$ajax->run();
