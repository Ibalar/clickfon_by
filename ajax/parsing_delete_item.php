<?php

require_once 'api/Turbo.php';

class ParsingDeleteItemAjax extends Turbo
{
    public function run()
    {
        header('Content-Type: application/json');

        // Check access rights
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Permission denied']);
            return;
        }

        // Get item ID (POST preferred, GET fallback)
        $itemId = $this->request->post('id', 'integer') ?: $this->request->get('id', 'integer');

        if (empty($itemId)) {
            echo json_encode(['status' => 'error', 'message' => 'Item ID is required']);
            return;
        }

        $sourceId = $this->request->post('source_id', 'integer') ?: $this->request->get('source_id', 'integer');

        try {
            $result = $this->parsing->deleteItem($itemId);

            if ($result) {
                if (!empty($sourceId)) {
                    $this->parsing->createLog((int) $sourceId, (int) $itemId, 'item_deleted', 'Parsing item deleted');
                }

                echo json_encode([
                    'status' => 'ok',
                    'message' => 'Item deleted successfully',
                    'id' => (int) $itemId
                ]);

                return;
            }

            echo json_encode([
                'status' => 'error',
                'message' => 'Failed to delete item'
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Error: ' . $e->getMessage()
            ]);
        }
    }
}

$ajax = new ParsingDeleteItemAjax();
$ajax->run();
