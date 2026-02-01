<?php

require_once 'api/Turbo.php';

class ParsingEditItemAjax extends Turbo
{
    public function run()
    {
        header('Content-Type: application/json');

        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Permission denied']);
            return;
        }

        $itemId = $this->request->post('id', 'integer') ?: $this->request->get('id', 'integer');

        if (empty($itemId)) {
            echo json_encode(['status' => 'error', 'message' => 'Item ID is required']);
            return;
        }

        $method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');

        try {
            if ($method === 'GET') {
                $item = $this->parsing->getItem((int) $itemId);

                if (empty($item)) {
                    echo json_encode(['status' => 'error', 'message' => 'Item not found']);
                    return;
                }

                echo json_encode(['status' => 'success', 'item' => $item]);
                return;
            }

            $url = trim((string) $this->request->post('url', 'string'));
            $sourceId = $this->request->post('source_id', 'integer');

            if ($url === '') {
                echo json_encode(['status' => 'error', 'message' => 'URL is required']);
                return;
            }

            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid URL format']);
                return;
            }

            $oldItem = $this->parsing->getItem((int) $itemId);
            if (empty($oldItem)) {
                echo json_encode(['status' => 'error', 'message' => 'Item not found']);
                return;
            }

            $updated = $this->parsing->updateItem((int) $itemId, ['url' => $url]);

            if (!$updated) {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update item']);
                return;
            }

            $logSourceId = (int) ($sourceId ?: $oldItem->parsing_source_id);
            $this->parsing->createLog(
                $logSourceId ?: null,
                (int) $itemId,
                'item_updated',
                'Parsing item updated: url=' . $url
            );

            echo json_encode([
                'status' => 'success',
                'message' => 'Item updated successfully',
                'id' => (int) $itemId,
                'url' => $url
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        }
    }
}

$ajax = new ParsingEditItemAjax();
$ajax->run();
