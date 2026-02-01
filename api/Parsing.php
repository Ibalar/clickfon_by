<?php

require_once 'Turbo.php';

class Parsing extends Turbo
{
    private $userAgents = [
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:121.0) Gecko/20100101 Firefox/121.0',
        'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.1 Safari/605.1.15',
        'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
    ];

    private $requestDelay = 1.5; // seconds between requests
    private $urlTimeout = 30; // timeout per URL
    private $sourceTimeout = 300; // max timeout per source

    /**
     * Get Sources
     */
    public function getSources($filter = [])
    {
        $isActiveFilter = '';
        $sqlLimit = '';

        if (isset($filter['is_active'])) {
            $isActiveFilter = $this->db->placehold('AND is_active = ?', (int) $filter['is_active']);
        }

        if (!empty($filter['limit'])) {
            $limit = max(1, (int) $filter['limit']);
            $offset = 0;

            if (!empty($filter['offset'])) {
                $offset = max(0, (int) $filter['offset']);
            }

            $sqlLimit = $this->db->placehold('LIMIT ?, ?', $offset, $limit);
        }

        $query = $this->db->placehold(
            "SELECT 
                id, name, base_url, selector_price, selector_article, 
                price_min_bound, price_max_bound, is_active, 
                last_parsed_at, created_at, updated_at
            FROM __parsing_sources
            WHERE 1
                $isActiveFilter
            ORDER BY created_at DESC
            $sqlLimit"
        );

        $this->db->query($query);

        return $this->db->results();
    }

    /**
     * Get Source
     */
    public function getSource($id)
    {
        if (empty($id)) {
            return false;
        }

        $query = $this->db->placehold(
            "SELECT 
                id, name, base_url, selector_price, selector_article, 
                price_min_bound, price_max_bound, is_active, 
                last_parsed_at, created_at, updated_at
            FROM __parsing_sources
            WHERE id = ?
            LIMIT 1",
            (int) $id
        );

        $this->db->query($query);

        return $this->db->result();
    }

    /**
     * Create Source
     */
    public function createSource($data)
    {
        $data = (array) $data;

        // Validation
        if (empty($data['name']) || empty($data['base_url']) || empty($data['selector_price'])) {
            return false;
        }

        // Validate URL
        if (!filter_var($data['base_url'], FILTER_VALIDATE_URL)) {
            return false;
        }

        // Set defaults
        if (!isset($data['is_active'])) {
            $data['is_active'] = 1;
        }

        // Prepare insert data
        $insertData = [
            'name' => $data['name'],
            'base_url' => $data['base_url'],
            'selector_price' => $data['selector_price'],
            'is_active' => (int) $data['is_active']
        ];

        // Article selector is optional
        if (isset($data['selector_article'])) {
            $insertData['selector_article'] = $data['selector_article'];
        }

        if (isset($data['price_min_bound'])) {
            $insertData['price_min_bound'] = $data['price_min_bound'];
        }

        if (isset($data['price_max_bound'])) {
            $insertData['price_max_bound'] = $data['price_max_bound'];
        }

        try {
            $query = $this->db->placehold("INSERT INTO __parsing_sources SET ?%", $insertData);
            $this->db->query($query);

            $sourceId = $this->db->insertId();

            // Log creation
            $this->createLog($sourceId, null, 'source_created', 'Source created: ' . $data['name']);

            return $sourceId;
        } catch (Exception $e) {
            $this->createLog(null, null, 'error', 'Failed to create source: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Update Source
     */
    public function updateSource($id, $data)
    {
        if (empty($id)) {
            return false;
        }

        $data = (array) $data;

        // Remove fields that shouldn't be updated
        unset($data['id']);
        unset($data['created_at']);

        // Validate URL if provided
        if (isset($data['base_url']) && !filter_var($data['base_url'], FILTER_VALIDATE_URL)) {
            return false;
        }

        if (empty($data)) {
            return false;
        }

        try {
            $query = $this->db->placehold("UPDATE __parsing_sources SET ?% WHERE id = ? LIMIT 1", $data, (int) $id);
            $this->db->query($query);

            // Log update
            $changes = implode(', ', array_keys($data));
            $this->createLog((int) $id, null, 'source_updated', 'Source updated. Changed fields: ' . $changes);

            return true;
        } catch (Exception $e) {
            $this->createLog((int) $id, null, 'error', 'Failed to update source: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Delete Source
     */
    public function deleteSource($id)
    {
        if (empty($id)) {
            return false;
        }

        try {
            // Log deletion before actual deletion
            $source = $this->getSource($id);
            if ($source) {
                $this->createLog((int) $id, null, 'source_deleted', 'Source deleted: ' . $source->name);
            }

            $query = $this->db->placehold("DELETE FROM __parsing_sources WHERE id = ? LIMIT 1", (int) $id);
            $this->db->query($query);

            return true;
        } catch (Exception $e) {
            $this->createLog((int) $id, null, 'error', 'Failed to delete source: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Import URLs from file
     */
    public function importUrls($sourceId, $file, $mode = 'create')
    {
        $result = [
            'success' => 0,
            'failed' => 0,
            'errors' => []
        ];

        if (empty($sourceId) || !$this->getSource($sourceId)) {
            $result['errors'][] = 'Invalid source ID';
            return $result;
        }

        if (!file_exists($file) || !is_readable($file)) {
            $result['errors'][] = 'File not found or not readable';
            return $result;
        }

        $handle = fopen($file, 'r');
        if (!$handle) {
            $result['errors'][] = 'Failed to open file';
            return $result;
        }

        $lineNumber = 0;

        while (($line = fgets($handle)) !== false) {
            $lineNumber++;
            $line = trim($line);

            if (empty($line)) {
                continue;
            }

            // Parse line - support multiple delimiters with better detection
            $parts = null;
            $line_original = $line;

            // Detect delimiter
            $delimiter = null;
            if (strpos($line, ',') !== false) {
                $delimiter = ',';
            } elseif (strpos($line, ';') !== false) {
                $delimiter = ';';
            } elseif (strpos($line, '|') !== false) {
                $delimiter = '|';
            } elseif (strpos($line, "\t") !== false) {
                $delimiter = "\t";
            } else {
                // Fallback: try to find any whitespace followed by http
                $parts = preg_split('/\s+(?=http)/i', $line, 2);
                if (count($parts) !== 2) {
                    $parts = preg_split('/\s+/', $line, 2);
                }
                $delimiter = 'whitespace';
            }

            if ($delimiter !== 'whitespace') {
                $parts = explode($delimiter, $line, 2);
            }

            // Add debug logging
            $this->createLog(
                (int)$sourceId,
                null,
                'import_debug',
                "Line $lineNumber: original='{$line_original}' delimiter='$delimiter' parts_count=" . count($parts)
            );

            if (count($parts) != 2) {
                $result['failed']++;
                $result['errors'][] = "Line $lineNumber: Invalid format (expected 2 parts, got " . count($parts) . ")";
                continue;
            }

            $article = trim($parts[0], " \t\n\r\0\x0B");
            $url = trim($parts[1], " \t\n\r\0\x0B");

            // Validate
            if (empty($article)) {
                $result['failed']++;
                $result['errors'][] = "Line $lineNumber: Empty article";
                continue;
            }

            if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
                $result['failed']++;
                $result['errors'][] = "Line $lineNumber: Invalid URL";
                continue;
            }

            // Check if article exists in variants
            $this->db->query("SELECT id FROM __variants WHERE sku = ? LIMIT 1", $article);
            if (!$this->db->result()) {
                $result['failed']++;
                $result['errors'][] = "Line $lineNumber: Article '$article' not found in variants";
                continue;
            }

            // Process based on mode
            try {
                if ($mode == 'create') {
                    // Check if exists
                    $this->db->query(
                        "SELECT id FROM __parsing_items WHERE parsing_source_id = ? AND article_reference = ?",
                        (int) $sourceId,
                        $article
                    );

                    if ($this->db->result()) {
                        $result['failed']++;
                        $result['errors'][] = "Line $lineNumber: Article '$article' already exists for this source";
                        continue;
                    }

                    // Insert new
                    $query = $this->db->placehold(
                        "INSERT INTO __parsing_items SET parsing_source_id = ?, article_reference = ?, url = ?, status = 'pending'",
                        (int) $sourceId,
                        $article,
                        $url
                    );
                    $this->db->query($query);
                    $result['success']++;

                    // Log success detail
                    $this->createLog(
                        (int)$sourceId,
                        null,
                        'import_success_detail',
                        "Line $lineNumber: article='$article' url='$url' mode='$mode'"
                    );
                } elseif ($mode == 'update') {
                    // Update existing only
                    $query = $this->db->placehold(
                        "UPDATE __parsing_items SET url = ?, status = 'pending' WHERE parsing_source_id = ? AND article_reference = ?",
                        $url,
                        (int) $sourceId,
                        $article
                    );
                    $this->db->query($query);

                    if ($this->db->affectedRows() > 0) {
                        $result['success']++;

                        // Log success detail
                        $this->createLog(
                            (int)$sourceId,
                            null,
                            'import_success_detail',
                            "Line $lineNumber: article='$article' url='$url' mode='$mode'"
                        );
                    } else {
                        $result['failed']++;
                        $result['errors'][] = "Line $lineNumber: Article '$article' not found for update";
                    }
                } elseif ($mode == 'create_or_update') {
                    // Upsert
                    $query = $this->db->placehold(
                        "INSERT INTO __parsing_items (parsing_source_id, article_reference, url, status) 
                        VALUES (?, ?, ?, 'pending')
                        ON DUPLICATE KEY UPDATE url = VALUES(url), status = 'pending'",
                        (int) $sourceId,
                        $article,
                        $url
                    );
                    $this->db->query($query);
                    $result['success']++;

                    // Log success detail
                    $this->createLog(
                        (int)$sourceId,
                        null,
                        'import_success_detail',
                        "Line $lineNumber: article='$article' url='$url' mode='$mode'"
                    );
                }
            } catch (Exception $e) {
                $result['failed']++;
                $result['errors'][] = "Line $lineNumber: " . $e->getMessage();
            }
        }

        fclose($handle);

        // Log import
        $this->createLog(
            (int) $sourceId,
            null,
            'urls_imported',
            "Imported URLs: {$result['success']} success, {$result['failed']} failed, mode: $mode"
        );

        return $result;
    }

    /**
     * Get Items
     */
    public function getItems($sourceId, $filter = [])
    {
        $statusFilter = '';
        $sqlLimit = '';

        if (!empty($filter['status'])) {
            $statusFilter = $this->db->placehold('AND status = ?', $filter['status']);
        }

        if (!empty($filter['limit'])) {
            $limit = max(1, (int) $filter['limit']);
            $offset = 0;

            if (!empty($filter['offset'])) {
                $offset = max(0, (int) $filter['offset']);
            }

            $sqlLimit = $this->db->placehold('LIMIT ?, ?', $offset, $limit);
        }

        $query = $this->db->placehold(
            "SELECT 
                id, parsing_source_id, article_reference, url, 
                parsed_price, status, last_error, last_parsed_at,
                created_at, updated_at
            FROM __parsing_items
            WHERE parsing_source_id = ?
                $statusFilter
            ORDER BY created_at DESC
            $sqlLimit",
            (int) $sourceId
        );

        $this->db->query($query);

        return $this->db->results();
    }

    /**
     * Delete Item
     */
    public function deleteItem($itemId)
    {
        if (empty($itemId)) {
            return false;
        }

        try {
            $query = $this->db->placehold("DELETE FROM __parsing_items WHERE id = ? LIMIT 1", (int) $itemId);
            $this->db->query($query);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Parse Source
     */
    public function parseSource($sourceId)
    {
        $result = [
            'parsed' => 0,
            'updated' => 0,
            'errors' => 0,
            'messages' => []
        ];

        // Get source
        $source = $this->getSource($sourceId);
        if (!$source) {
            $result['messages'][] = 'Source not found';
            return $result;
        }

        if (!$source->is_active) {
            $result['messages'][] = 'Source is not active';
            return $result;
        }

        // Log start
        $this->createLog((int) $sourceId, null, 'parse_start', 'Started parsing source: ' . $source->name);

        $startTime = time();

        // Get pending items
        $items = $this->getItems($sourceId, ['status' => 'pending']);

        if (empty($items)) {
            $result['messages'][] = 'No pending items to parse';
            $this->createLog((int) $sourceId, null, 'parse_complete', 'Parse completed: no pending items');
            return $result;
        }

        // Initialize HTML parser
        require_once $this->config->root_dir . '/vendor/autoload.php';

        foreach ($items as $item) {
            // Check timeout
            if (time() - $startTime > $this->sourceTimeout) {
                $result['messages'][] = 'Source timeout reached';
                break;
            }

            // Log parse start for item
            $this->createLog((int) $sourceId, (int) $item->id, 'parse_item_start', 'Parsing item: ' . $item->article_reference);

            try {
                // Parse the URL
                $parseResult = $this->parseUrl($item->url, $source->selector_price, $source->selector_article);

                if ($parseResult['status'] == 'error') {
                    $error_detail = $parseResult['error'];
                    if (!empty($parseResult['html_snippet'])) {
                        $error_detail .= ' | HTML snippet: ' . substr($parseResult['html_snippet'], 0, 100);
                    }
                    if (!empty($parseResult['http_code'])) {
                        $error_detail .= ' | HTTP: ' . $parseResult['http_code'];
                    }

                    $this->db->query(
                        "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                        $error_detail,
                        (int) $item->id
                    );

                    $result['errors']++;
                    $result['messages'][] = "Item {$item->article_reference}: " . $parseResult['error'];

                    $this->createLog(
                        (int) $sourceId,
                        (int) $item->id,
                        'parse_error',
                        'Parse error: ' . $error_detail
                    );
                    continue;
                }

                $parsedPrice = $parseResult['price'];
                $parsedArticle = $parseResult['article'];

                // Article verification is optional
                // If article selector returned a value and it doesn't match - that's an error
                // If article selector returned nothing - that's OK (ignore article)
                if (!empty($parsedArticle) && $parsedArticle !== $item->article_reference) {
                    // Article found on competitor page but doesn't match - error
                    $error = "Article mismatch: expected '{$item->article_reference}', got '{$parsedArticle}'";
                    $this->db->query(
                        "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                        $error,
                        (int) $item->id
                    );
                    $result['errors']++;
                    $result['messages'][] = "Item {$item->article_reference}: " . $error;
                    continue;
                }

                // Check price bounds
                if ($source->price_min_bound !== null && $parsedPrice < $source->price_min_bound) {
                    $error = "Price below minimum bound: {$parsedPrice} < {$source->price_min_bound}";
                    $this->db->query(
                        "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = NOW() WHERE id = ?",
                        $error,
                        $parsedPrice,
                        (int) $item->id
                    );
                    $result['errors']++;
                    $result['messages'][] = "Item {$item->article_reference}: " . $error;
                    continue;
                }

                if ($source->price_max_bound !== null && $parsedPrice > $source->price_max_bound) {
                    $error = "Price above maximum bound: {$parsedPrice} > {$source->price_max_bound}";
                    $this->db->query(
                        "UPDATE __parsing_items SET status = 'error', last_error = ?, parsed_price = ?, last_parsed_at = NOW() WHERE id = ?",
                        $error,
                        $parsedPrice,
                        (int) $item->id
                    );
                    $result['errors']++;
                    $result['messages'][] = "Item {$item->article_reference}: " . $error;
                    continue;
                }

                // Find variant by SKU
                $this->db->query("SELECT id, product_id, price FROM __variants WHERE sku = ? LIMIT 1", $item->article_reference);
                $variant = $this->db->result();

                if (!$variant) {
                    $error = 'Variant not found';
                    $this->db->query(
                        "UPDATE __parsing_items SET status = 'not_found', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                        $error,
                        (int) $item->id
                    );
                    $result['errors']++;
                    $result['messages'][] = "Item {$item->article_reference}: " . $error;
                    continue;
                }

                // Update price only if parsed price is lower
                $priceUpdated = false;
                if ($parsedPrice < $variant->price) {
                    $oldPrice = $variant->price;

                    // Update variant price
                    $this->db->query(
                        "UPDATE __variants SET price = ? WHERE id = ?",
                        $parsedPrice,
                        (int) $variant->id
                    );

                    // Update denormalized product stats
                    $this->variants->updateProductVariantStats($variant->product_id);

                    // Log price update
                    $this->createLog(
                        (int) $sourceId,
                        (int) $item->id,
                        'price_updated',
                        "Price updated for {$item->article_reference}: {$oldPrice} -> {$parsedPrice}",
                        $oldPrice,
                        $parsedPrice,
                        (int) $variant->product_id
                    );

                    $priceUpdated = true;
                    $result['updated']++;
                }

                // Update item status
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'parsed', parsed_price = ?, last_error = NULL, last_parsed_at = NOW() WHERE id = ?",
                    $parsedPrice,
                    (int) $item->id
                );

                $result['parsed']++;

                if ($priceUpdated) {
                    $result['messages'][] = "Item {$item->article_reference}: price updated from {$oldPrice} to {$parsedPrice}";
                } else {
                    $result['messages'][] = "Item {$item->article_reference}: parsed {$parsedPrice}, no update needed (current: {$variant->price})";
                }
            } catch (Exception $e) {
                $this->db->query(
                    "UPDATE __parsing_items SET status = 'error', last_error = ?, last_parsed_at = NOW() WHERE id = ?",
                    $e->getMessage(),
                    (int) $item->id
                );
                $result['errors']++;
                $result['messages'][] = "Item {$item->article_reference}: " . $e->getMessage();

                $this->createLog((int) $sourceId, (int) $item->id, 'error', 'Parse error: ' . $e->getMessage());
            }

            // Rate limiting
            usleep($this->requestDelay * 1000000);
        }

        // Update source last_parsed_at
        $this->db->query("UPDATE __parsing_sources SET last_parsed_at = NOW() WHERE id = ?", (int) $sourceId);

        // Log completion
        $this->createLog(
            (int) $sourceId,
            null,
            'parse_complete',
            "Parse completed: {$result['parsed']} parsed, {$result['updated']} updated, {$result['errors']} errors"
        );

        return $result;
    }

    /**
     * Parse URL for price and article
     */
    public function parseUrl($url, $priceSelector, $articleSelector)
    {
        $result = [
            'status' => 'error',
            'price' => null,
            'article' => null,
            'error' => null,
            'http_code' => null,
            'html_snippet' => null
        ];

        try {
            $userAgent = $this->userAgents[array_rand($this->userAgents)];

            $headers = "User-Agent: {$userAgent}\r\n";
            $headers .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
            $headers .= "Accept-Language: en-US,en;q=0.5\r\n";
            $headers .= "Accept-Encoding: gzip, deflate\r\n";
            $headers .= "Connection: close\r\n";
            $headers .= "Pragma: no-cache\r\n";
            $headers .= "Cache-Control: no-cache\r\n";

            $context = stream_context_create([
                'http' => [
                    'method' => 'GET',
                    'header' => $headers,
                    'timeout' => $this->urlTimeout,
                    'follow_location' => true,
                    'max_redirects' => 5
                ]
            ]);

            $html = @file_get_contents($url, false, $context);

            $http_response_header_val = isset($http_response_header) ? $http_response_header : [];
            $http_code = 200;

            foreach ($http_response_header_val as $header) {
                if (preg_match('/^HTTP\/\d\.\d\s+(\d+)/', $header, $matches)) {
                    $http_code = (int) $matches[1];
                    break;
                }
            }

            $result['http_code'] = $http_code;

            if ($html === false) {
                $result['error'] = 'Failed to fetch URL (HTTP ' . $http_code . ')';
                return $result;
            }

            if ($http_code >= 400) {
                $snippet = substr($html, 0, 500);
                $result['html_snippet'] = $snippet;
                $result['error'] = 'Server returned HTTP ' . $http_code . '. Response: ' . substr($snippet, 0, 100);
                return $result;
            }

            if (strlen($html) < 50) {
                $result['error'] = 'Received unusually short response: ' . trim(substr($html, 0, 100));
                return $result;
            }

            try {
                $parser = new Sunra\PhpSimple\HtmlDomParser();
                $dom = $parser->str_get_html($html);

                if (!$dom) {
                    $snippet = substr($html, 0, 500);
                    $result['html_snippet'] = $snippet;
                    $result['error'] = 'Failed to parse HTML. First 100 chars: ' . substr($snippet, 0, 100);
                    return $result;
                }

                $priceElement = $dom->find($priceSelector, 0);
                if (!$priceElement) {
                    $result['error'] = 'Price selector "' . $priceSelector . '" not found on page';
                    return $result;
                }

                $priceText = $priceElement->plaintext;
                if (empty($priceText)) {
                    $result['error'] = 'Price element exists but is empty';
                    return $result;
                }

                $price = preg_replace('/[^\d.,]/', '', $priceText);
                $price = str_replace(',', '.', $price);
                $price = floatval($price);

                if ($price <= 0) {
                    $result['error'] = 'Invalid price value: ' . $priceText;
                    return $result;
                }

                $article = null;
                if ($articleSelector) {
                    $articleElement = $dom->find($articleSelector, 0);
                    if ($articleElement) {
                        $article = trim($articleElement->plaintext);
                    }
                }

                $dom->clear();

                $result['status'] = 'success';
                $result['price'] = $price;
                $result['article'] = $article;
            } catch (Exception $e) {
                $snippet = substr($html, 0, 200);
                $result['html_snippet'] = $snippet;
                $result['error'] = 'Parse error: ' . $e->getMessage() . ' (First 50 chars: ' . substr($snippet, 0, 50) . ')';
            }
        } catch (Exception $e) {
            $result['error'] = 'Unexpected error: ' . $e->getMessage();
        }

        return $result;
    }

    /**
     * Test Selector on URL
     */
    public function testSelector($url, $selector)
    {
        $result = [
            'status' => 'error',
            'value' => null,
            'message' => null,
            'http_code' => null,
            'html_snippet' => null
        ];

        if (empty($url) || empty($selector)) {
            $result['message'] = 'URL and selector are required';
            return $result;
        }

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $result['message'] = 'Invalid URL';
            return $result;
        }

        try {
            require_once $this->config->root_dir . '/vendor/autoload.php';

            $userAgent = $this->userAgents[array_rand($this->userAgents)];

            $headers = "User-Agent: {$userAgent}\r\n";
            $headers .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
            $headers .= "Accept-Language: en-US,en;q=0.5\r\n";
            $headers .= "Accept-Encoding: gzip, deflate\r\n";
            $headers .= "Connection: close\r\n";
            $headers .= "Pragma: no-cache\r\n";
            $headers .= "Cache-Control: no-cache\r\n";

            $context = stream_context_create([
                'http' => [
                    'method' => 'GET',
                    'header' => $headers,
                    'timeout' => $this->urlTimeout,
                    'follow_location' => true,
                    'max_redirects' => 5
                ]
            ]);

            $html = @file_get_contents($url, false, $context);

            $http_response_header_val = isset($http_response_header) ? $http_response_header : [];
            $http_code = 200;

            foreach ($http_response_header_val as $header) {
                if (preg_match('/^HTTP\/\d\.\d\s+(\d+)/', $header, $matches)) {
                    $http_code = (int) $matches[1];
                    break;
                }
            }

            $result['http_code'] = $http_code;

            if ($html === false) {
                $result['message'] = 'Failed to fetch URL (HTTP ' . $http_code . ')';
                return $result;
            }

            if ($http_code >= 400) {
                $snippet = substr($html, 0, 500);
                $result['html_snippet'] = $snippet;
                $result['message'] = 'Server returned HTTP ' . $http_code . '. Response: ' . substr($snippet, 0, 100);
                return $result;
            }

            if (strlen($html) < 50) {
                $result['message'] = 'Received unusually short response: ' . trim(substr($html, 0, 100));
                return $result;
            }

            $parser = new Sunra\PhpSimple\HtmlDomParser();
            $dom = $parser->str_get_html($html);

            if (!$dom) {
                $snippet = substr($html, 0, 500);
                $result['html_snippet'] = $snippet;
                $result['message'] = 'Failed to parse HTML. First 100 chars: ' . substr($snippet, 0, 100);
                return $result;
            }

            $element = $dom->find($selector, 0);
            if (!$element) {
                $result['message'] = 'Selector "' . $selector . '" not found on page';
                return $result;
            }

            $value = $element->plaintext;
            $dom->clear();

            $result['status'] = 'success';
            $result['value'] = $value;
            $result['message'] = 'Selector found successfully';
        } catch (Exception $e) {
            $result['message'] = 'Exception: ' . $e->getMessage();
        }

        return $result;
    }

    /**
     * Get Schedules
     */
    public function getSchedules($filter = [])
    {
        $isActiveFilter = '';
        $sourceFilter = '';
        $sqlLimit = '';

        if (isset($filter['is_active'])) {
            $isActiveFilter = $this->db->placehold('AND is_active = ?', (int) $filter['is_active']);
        }

        if (!empty($filter['parsing_source_id'])) {
            $sourceFilter = $this->db->placehold('AND parsing_source_id = ?', (int) $filter['parsing_source_id']);
        }

        if (!empty($filter['limit'])) {
            $limit = max(1, (int) $filter['limit']);
            $offset = 0;

            if (!empty($filter['offset'])) {
                $offset = max(0, (int) $filter['offset']);
            }

            $sqlLimit = $this->db->placehold('LIMIT ?, ?', $offset, $limit);
        }

        $query = $this->db->placehold(
            "SELECT 
                id, parsing_source_id, cron_expression, is_active,
                next_run_at, last_run_at, created_at, updated_at
            FROM __parsing_schedules
            WHERE 1
                $isActiveFilter
                $sourceFilter
            ORDER BY created_at DESC
            $sqlLimit"
        );

        $this->db->query($query);

        return $this->db->results();
    }

    /**
     * Get Schedule by Source ID
     */
    public function getSchedule($sourceId)
    {
        if (empty($sourceId)) {
            return false;
        }

        $query = $this->db->placehold(
            "SELECT 
                id, parsing_source_id, cron_expression, is_active,
                next_run_at, last_run_at, created_at, updated_at
            FROM __parsing_schedules
            WHERE parsing_source_id = ?
            LIMIT 1",
            (int) $sourceId
        );

        $this->db->query($query);

        return $this->db->result();
    }

    /**
     * Create or Update Schedule
     */
    public function createOrUpdateSchedule($sourceId, $cronExpression)
    {
        if (empty($sourceId) || empty($cronExpression)) {
            return false;
        }

        // Validate cron expression (basic check)
        if (!$this->validateCronExpression($cronExpression)) {
            return false;
        }

        try {
            // Calculate next run time
            $nextRunAt = $this->getCronNextRun($cronExpression);

            // Check if schedule exists
            $existing = $this->getSchedule($sourceId);

            if ($existing) {
                // Update
                $query = $this->db->placehold(
                    "UPDATE __parsing_schedules SET cron_expression = ?, next_run_at = ? WHERE parsing_source_id = ?",
                    $cronExpression,
                    $nextRunAt,
                    (int) $sourceId
                );
                $this->db->query($query);

                $this->createLog((int) $sourceId, null, 'schedule_updated', "Schedule updated: $cronExpression");
            } else {
                // Create
                $query = $this->db->placehold(
                    "INSERT INTO __parsing_schedules (parsing_source_id, cron_expression, next_run_at, is_active) VALUES (?, ?, ?, 1)",
                    (int) $sourceId,
                    $cronExpression,
                    $nextRunAt
                );
                $this->db->query($query);

                $this->createLog((int) $sourceId, null, 'schedule_created', "Schedule created: $cronExpression");
            }

            return true;
        } catch (Exception $e) {
            $this->createLog((int) $sourceId, null, 'error', 'Failed to create/update schedule: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Delete Schedule
     */
    public function deleteSchedule($id)
    {
        if (empty($id)) {
            return false;
        }

        try {
            $query = $this->db->placehold("DELETE FROM __parsing_schedules WHERE id = ? LIMIT 1", (int) $id);
            $this->db->query($query);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Check and Run Schedules
     */
    public function checkAndRunSchedules()
    {
        $now = date('Y-m-d H:i:s');

        // Get active schedules that should run
        $query = $this->db->placehold(
            "SELECT id, parsing_source_id, cron_expression, next_run_at 
            FROM __parsing_schedules 
            WHERE is_active = 1 AND next_run_at <= ?",
            $now
        );

        $this->db->query($query);
        $schedules = $this->db->results();

        foreach ($schedules as $schedule) {
            try {
                // Log schedule run
                $this->createLog(
                    (int) $schedule->parsing_source_id,
                    null,
                    'schedule_run',
                    "Running scheduled parse: " . $schedule->cron_expression
                );

                // Run parsing
                $this->parseSource($schedule->parsing_source_id);

                // Calculate next run time
                $nextRunAt = $this->getCronNextRun($schedule->cron_expression);

                // Update schedule
                $this->db->query(
                    "UPDATE __parsing_schedules SET last_run_at = NOW(), next_run_at = ? WHERE id = ?",
                    $nextRunAt,
                    (int) $schedule->id
                );
            } catch (Exception $e) {
                $this->createLog(
                    (int) $schedule->parsing_source_id,
                    null,
                    'error',
                    'Schedule run error: ' . $e->getMessage()
                );
            }
        }
    }

    /**
     * Get Logs
     */
    public function getLogs($filter = [])
    {
        $sourceFilter = '';
        $itemFilter = '';
        $actionFilter = '';
        $productFilter = '';
        $searchFilter = '';
        $dateFromFilter = '';
        $dateToFilter = '';
        $sqlLimit = '';

        if (!empty($filter['parsing_source_id'])) {
            $sourceFilter = $this->db->placehold('AND l.parsing_source_id = ?', (int) $filter['parsing_source_id']);
        } elseif (!empty($filter['source_id'])) {
            $sourceFilter = $this->db->placehold('AND l.parsing_source_id = ?', (int) $filter['source_id']);
        }

        if (!empty($filter['parsing_item_id'])) {
            $itemFilter = $this->db->placehold('AND l.parsing_item_id = ?', (int) $filter['parsing_item_id']);
        }

        if (!empty($filter['action'])) {
            $actionFilter = $this->db->placehold('AND l.action = ?', $filter['action']);
        }

        if (!empty($filter['product_id'])) {
            $productFilter = $this->db->placehold('AND l.product_id = ?', (int) $filter['product_id']);
        }

        if (!empty($filter['search'])) {
            $searchFilter = $this->db->placehold('AND l.message LIKE ?', '%' . $filter['search'] . '%');
        }

        if (!empty($filter['date_from'])) {
            $dateFromFilter = $this->db->placehold('AND l.created_at >= ?', $filter['date_from']);
        }

        if (!empty($filter['date_to'])) {
            $dateToFilter = $this->db->placehold('AND l.created_at <= ?', $filter['date_to'] . ' 23:59:59');
        }

        $order = 'l.created_at DESC';
        if (!empty($filter['order'])) {
            $order = $filter['order'];
        }

        if (!empty($filter['limit'])) {
            $limit = max(1, (int) $filter['limit']);
            $offset = 0;

            if (!empty($filter['offset'])) {
                $offset = max(0, (int) $filter['offset']);
            }

            $sqlLimit = $this->db->placehold('LIMIT ?, ?', $offset, $limit);
        }

        $query = $this->db->placehold(
            "SELECT 
                l.id, l.parsing_source_id, l.parsing_item_id, l.product_id,
                l.action, l.message, l.old_price, l.new_price, l.created_at,
                s.name as source_name
            FROM __parsing_logs l
            LEFT JOIN __parsing_sources s ON s.id = l.parsing_source_id
            WHERE 1
                $sourceFilter
                $itemFilter
                $actionFilter
                $productFilter
                $searchFilter
                $dateFromFilter
                $dateToFilter
            ORDER BY $order
            $sqlLimit"
        );

        $this->db->query($query);

        return $this->db->results();
    }

    /**
     * Count Logs
     */
    public function countLogs($filter = [])
    {
        $sourceFilter = '';
        $itemFilter = '';
        $actionFilter = '';
        $productFilter = '';
        $searchFilter = '';
        $dateFromFilter = '';
        $dateToFilter = '';

        if (!empty($filter['parsing_source_id'])) {
            $sourceFilter = $this->db->placehold('AND parsing_source_id = ?', (int) $filter['parsing_source_id']);
        } elseif (!empty($filter['source_id'])) {
            $sourceFilter = $this->db->placehold('AND parsing_source_id = ?', (int) $filter['source_id']);
        }

        if (!empty($filter['parsing_item_id'])) {
            $itemFilter = $this->db->placehold('AND parsing_item_id = ?', (int) $filter['parsing_item_id']);
        }

        if (!empty($filter['action'])) {
            $actionFilter = $this->db->placehold('AND action = ?', $filter['action']);
        }

        if (!empty($filter['product_id'])) {
            $productFilter = $this->db->placehold('AND product_id = ?', (int) $filter['product_id']);
        }

        if (!empty($filter['search'])) {
            $searchFilter = $this->db->placehold('AND message LIKE ?', '%' . $filter['search'] . '%');
        }

        if (!empty($filter['date_from'])) {
            $dateFromFilter = $this->db->placehold('AND created_at >= ?', $filter['date_from']);
        }

        if (!empty($filter['date_to'])) {
            $dateToFilter = $this->db->placehold('AND created_at <= ?', $filter['date_to'] . ' 23:59:59');
        }

        $query = $this->db->placehold(
            "SELECT COUNT(id) as count
            FROM __parsing_logs
            WHERE 1
                $sourceFilter
                $itemFilter
                $actionFilter
                $productFilter
                $searchFilter
                $dateFromFilter
                $dateToFilter"
        );

        $this->db->query($query);
        return $this->db->result('count');
    }

    /**
     * Clear Old Logs
     */
    public function clearLogs($olderThanDays = 30)
    {
        if ($olderThanDays < 1) {
            return 0;
        }

        $query = $this->db->placehold(
            "DELETE FROM __parsing_logs WHERE created_at < DATE_SUB(NOW(), INTERVAL ? DAY)",
            (int) $olderThanDays
        );

        $this->db->query($query);

        return $this->db->affectedRows();
    }

    /**
     * Create Log Entry
     */
    public function createLog($sourceId, $itemId, $action, $message, $oldPrice = null, $newPrice = null, $productId = null)
    {
        try {
            $data = [
                'action' => $action,
                'message' => $message
            ];

            if ($sourceId !== null) {
                $data['parsing_source_id'] = (int) $sourceId;
            }

            if ($itemId !== null) {
                $data['parsing_item_id'] = (int) $itemId;
            }

            if ($oldPrice !== null) {
                $data['old_price'] = $oldPrice;
            }

            if ($newPrice !== null) {
                $data['new_price'] = $newPrice;
            }

            if ($productId !== null) {
                $data['product_id'] = (int) $productId;
            }

            $query = $this->db->placehold("INSERT INTO __parsing_logs SET ?%", $data);
            $this->db->query($query);

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Validate Cron Expression
     */
    public function validateCronExpression($expression)
    {
        $parts = explode(' ', trim($expression));

        // Basic validation: 5 parts (minute, hour, day, month, weekday)
        if (count($parts) != 5) {
            return false;
        }

        return true;
    }

    /**
     * Calculate Next Run Time from Cron Expression
     */
    public function getCronNextRun($cronExpression)
    {
        // Simple cron parser supporting basic formats
        $parts = explode(' ', trim($cronExpression));

        if (count($parts) != 5) {
            return date('Y-m-d H:i:s', strtotime('+1 hour'));
        }

        list($minute, $hour, $day, $month, $weekday) = $parts;

        $now = time();
        $currentMinute = (int) date('i', $now);
        $currentHour = (int) date('H', $now);

        // Handle */N patterns
        if (preg_match('/^\*\/(\d+)$/', $hour, $matches)) {
            // Every N hours
            $interval = (int) $matches[1];
            $nextHour = $currentHour + $interval;

            if ($minute == '0' || $minute == '*') {
                $nextMinute = 0;
            } else {
                $nextMinute = (int) $minute;
            }

            return date('Y-m-d H:i:s', strtotime("today {$nextHour}:{$nextMinute}:00"));
        }

        // Handle specific hour
        if (is_numeric($hour)) {
            $targetHour = (int) $hour;
            $targetMinute = is_numeric($minute) ? (int) $minute : 0;

            if ($currentHour > $targetHour || ($currentHour == $targetHour && $currentMinute >= $targetMinute)) {
                // Next day
                return date('Y-m-d H:i:s', strtotime("tomorrow {$targetHour}:{$targetMinute}:00"));
            } else {
                // Today
                return date('Y-m-d H:i:s', strtotime("today {$targetHour}:{$targetMinute}:00"));
            }
        }

        // Default: next hour
        return date('Y-m-d H:i:s', strtotime('+1 hour'));
    }
}
