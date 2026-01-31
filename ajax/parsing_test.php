<?php

require_once 'api/Turbo.php';

class ParsingTestAjax extends Turbo
{
    public function run()
    {
        header('Content-Type: application/json');

        // Получить параметры из GET
        $url = $this->request->get('url', 'string');
        $selectorPrice = $this->request->get('selector_price', 'string');
        $selectorArticle = $this->request->get('selector_article', 'string');

        // Валидация
        if (empty($url)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Не указан URL'
            ]);
            return;
        }

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Некорректный URL'
            ]);
            return;
        }

        if (empty($selectorPrice)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Не указан селектор для цены'
            ]);
            return;
        }

        if (empty($selectorArticle)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Не указан селектор для артикула'
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

        // Тестировать селекторы
        try {
            // Получить HTML с URL
            $html = $this->fetchUrl($url);

            if (!$html) {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Не удалось загрузить страницу. Проверьте URL и попробуйте позже.'
                ]);
                return;
            }

            // Парсить селекторы
            $priceValue = $this->parseSelector($html, $selectorPrice);
            $articleValue = $this->parseSelector($html, $selectorArticle);

            // Проверить результаты
            $errors = [];

            if ($priceValue === null) {
                $errors[] = 'Селектор цены не найден на странице';
            }

            if ($articleValue === null) {
                $errors[] = 'Селектор артикула не найден на странице';
            }

            if (!empty($errors)) {
                echo json_encode([
                    'status' => 'warning',
                    'message' => implode('. ', $errors),
                    'price' => $priceValue,
                    'article' => $articleValue
                ]);
                return;
            }

            echo json_encode([
                'status' => 'success',
                'message' => 'Селекторы работают корректно',
                'price' => $priceValue,
                'article' => $articleValue
            ]);

        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Ошибка при тестировании: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Загрузить HTML с URL
     */
    private function fetchUrl($url)
    {
        try {
            // Использовать file_get_contents с контекстом для установки User-Agent
            $context = stream_context_create([
                'http' => [
                    'method' => 'GET',
                    'timeout' => 10,
                    'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36\r\n"
                ]
            ]);

            $html = @file_get_contents($url, false, $context);

            if ($html === false) {
                return null;
            }

            // Преобразовать кодировку если нужно
            $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8,ISO-8859-1,Windows-1251');

            return $html;

        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Парсить селектор из HTML
     */
    private function parseSelector($html, $selector)
    {
        try {
            // Использовать simple_html_dom через composer если доступна
            if (class_exists('Sunra\PhpSimple\HtmlDomParser')) {
                $parser = new Sunra\PhpSimple\HtmlDomParser();
                $dom = $parser->str_get_html($html);

                if (!$dom) {
                    return null;
                }

                $element = $dom->find($selector, 0);

                if ($element) {
                    $value = trim($element->plaintext);
                    $dom->clear();
                    return $value;
                }

                $dom->clear();
                return null;
            }

            // Fallback: использовать регулярные выражения (базовый парсинг)
            // Это простой парсер для CSS селекторов
            $value = $this->parseWithRegex($html, $selector);
            return $value;

        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Базовый парсинг с использованием регулярных выражений
     */
    private function parseWithRegex($html, $selector)
    {
        // Очень базовая поддержка селекторов
        // Поддерживает: .class, #id, tag, tag.class, tag#id

        $selector = trim($selector);

        // Если это class селектор (.className)
        if (strpos($selector, '.') === 0) {
            $className = substr($selector, 1);
            if (preg_match('/<[^>]*class=["\']?[^"\']*' . preg_quote($className) . '[^"\']*["\']?[^>]*>(.*?)<\/[^>]*>/is', $html, $matches)) {
                return trim(strip_tags($matches[1]));
            }
        }

        // Если это ID селектор (#id)
        if (strpos($selector, '#') === 0) {
            $id = substr($selector, 1);
            if (preg_match('/<[^>]*id=["\']?' . preg_quote($id) . '["\']?[^>]*>(.*?)<\/[^>]*>/is', $html, $matches)) {
                return trim(strip_tags($matches[1]));
            }
        }

        // Если это tag селектор (div, span, etc)
        if (preg_match('/<' . preg_quote($selector) . '[^>]*>(.*?)<\/' . preg_quote($selector) . '>/is', $html, $matches)) {
            return trim(strip_tags($matches[1]));
        }

        return null;
    }
}

$ajax = new ParsingTestAjax();
$ajax->run();
