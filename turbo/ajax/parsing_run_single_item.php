<?php

session_start();

require_once '../../api/Turbo.php';

$turbo = new Turbo();

if (!$turbo->request->checkSession()) {
    trigger_error('Session expired', E_USER_WARNING);
    exit();
}

if (!$turbo->managers->access('parsing')) {
    $result = ['status' => 'error', 'message' => 'Permission denied'];
} else {
    $itemId = (int) $turbo->request->get('id', 'integer');

    if (empty($itemId)) {
        $result = ['status' => 'error', 'message' => 'Invalid item ID'];
    } else {
        $turbo->db->query(
            "SELECT id, parsing_source_id, article_reference, url, parsed_price, status, last_error, last_parsed_at
            FROM __parsing_items
            WHERE id = ?
            LIMIT 1",
            $itemId
        );
        $item = $turbo->db->result();

        if (empty($item)) {
            $result = ['status' => 'error', 'message' => 'Item not found'];
        } else {
            $source = $turbo->parsing->getSource($item->parsing_source_id);

            if (empty($source)) {
                $result = ['status' => 'error', 'message' => 'Source not found'];
            } else {
                set_time_limit(0);

                require_once $turbo->config->root_dir . '/vendor/autoload.php';
                $parsedAt = date('Y-m-d H:i:s');
                $parseResult = $turbo->parsing->parseUrl($item->url, $source->selector_price, $source->selector_article);

                if ($parseResult['status'] !== 'success') {
                    $turbo->db->query(
                        "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = ? WHERE id = ?",
                        $parseResult['error'],
                        $parsedAt,
                        (int) $item->id
                    );

                    $result = [
                        'status' => 'error',
                        'message' => 'Failed to parse URL: ' . $parseResult['error'],
                        'last_error' => $parseResult['error'],
                        'last_parsed_at' => $parsedAt
                    ];
                } else {
                    $parsedPrice = $parseResult['price'];
                    $parsedArticle = $parseResult['article'];

                    // Article verification is optional
                    // If article selector returned a value and it doesn't match - that's an error
                    // If article selector returned nothing - that's OK (ignore article)
                    if (!empty($parsedArticle) && $parsedArticle !== $item->article_reference) {
                        $error = "Article mismatch: expected '{$item->article_reference}', got '{$parsedArticle}'";
                        $turbo->db->query(
                            "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = ? WHERE id = ?",
                            $error,
                            $parsedPrice,
                            $parsedAt,
                            (int) $item->id
                        );

                        $result = [
                            'status' => 'error',
                            'message' => $error,
                            'last_error' => $error,
                            'last_parsed_at' => $parsedAt
                        ];
                    } elseif ($source->price_min_bound !== null && $parsedPrice < $source->price_min_bound) {
                        $error = "Price below minimum bound: {$parsedPrice} < {$source->price_min_bound}";
                        $turbo->db->query(
                            "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = ? WHERE id = ?",
                            $error,
                            $parsedPrice,
                            $parsedAt,
                            (int) $item->id
                        );

                        $result = [
                            'status' => 'error',
                            'message' => $error,
                            'last_error' => $error,
                            'last_parsed_at' => $parsedAt
                        ];
                    } elseif ($source->price_max_bound !== null && $parsedPrice > $source->price_max_bound) {
                        $error = "Price above maximum bound: {$parsedPrice} > {$source->price_max_bound}";
                        $turbo->db->query(
                            "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = ? WHERE id = ?",
                            $error,
                            $parsedPrice,
                            $parsedAt,
                            (int) $item->id
                        );

                        $result = [
                            'status' => 'error',
                            'message' => $error,
                            'last_error' => $error,
                            'last_parsed_at' => $parsedAt
                        ];
                    } else {
                        $turbo->db->query("SELECT id, product_id, price FROM __variants WHERE sku = ? LIMIT 1", $item->article_reference);
                        $variant = $turbo->db->result();

                        if (empty($variant)) {
                            $error = 'Variant not found';
                            $turbo->db->query(
                                "UPDATE __parsing_items SET status = 'not_found', last_error = ?, last_parsed_at = ? WHERE id = ?",
                                $error,
                                $parsedAt,
                                (int) $item->id
                            );

                            $result = [
                                'status' => 'error',
                                'message' => $error,
                                'last_error' => $error,
                                'last_parsed_at' => $parsedAt
                            ];
                        } else {
                            $priceUpdated = false;
                            $oldPrice = null;
                            $newPrice = null;

                            if ($parsedPrice < $variant->price) {
                                $oldPrice = $variant->price;
                                $newPrice = $parsedPrice;

                                $turbo->db->query(
                                    "UPDATE __variants SET price = ? WHERE id = ?",
                                    $parsedPrice,
                                    (int) $variant->id
                                );

                                $turbo->variants->updateProductVariantStats($variant->product_id);

                                $turbo->parsing->createLog(
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

                            $turbo->db->query(
                                "UPDATE __parsing_items SET status = 'parsed', parsed_price = ?, last_error = NULL, last_parsed_at = ? WHERE id = ?",
                                $parsedPrice,
                                $parsedAt,
                                (int) $item->id
                            );

                            $turbo->db->query("UPDATE __parsing_sources SET last_parsed_at = ? WHERE id = ?", $parsedAt, (int) $source->id);

                            $result = [
                                'status' => 'ok',
                                'message' => $priceUpdated ? 'Item parsed successfully and price updated' : 'Item parsed successfully',
                                'article' => $item->article_reference,
                                'price' => $parsedPrice,
                                'price_updated' => $priceUpdated,
                                'old_price' => $priceUpdated ? $oldPrice : null,
                                'new_price' => $priceUpdated ? $newPrice : null,
                                'last_parsed_at' => $parsedAt
                            ];
                        }
                    }
                }
            }
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);
