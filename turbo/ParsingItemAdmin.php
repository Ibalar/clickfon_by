<?php

require_once 'api/Turbo.php';

class ParsingItemAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        // Получить item_id из параметров
        $itemId = $this->request->get('id', 'integer');
        if (empty($itemId)) {
            $this->design->assign('message_error', 'invalid_id');
            return $this->design->fetch('error.tpl');
        }

        // Загрузить item из БД
        $item = $this->getItem($itemId);
        if (!$item) {
            $this->design->assign('message_error', 'item_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Загрузить source
        $source = $this->parsing->getSource($item->parsing_source_id);
        if (!$source) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Обработка POST запроса (сохранение)
        if ($this->request->method('post')) {
            $result = $this->saveItem($item);

            if ($result['success']) {
                $this->design->assign('message_success', $result['message']);
                // Перезагрузить item после сохранения
                $item = $this->getItem($itemId);
            } else {
                $this->design->assign('message_error', $result['message']);
                // Обновить item данными из формы при ошибке
                $item->url = $this->request->post('url', 'string');
            }
        }

        // Передать в Smarty
        $this->design->assign('item', $item);
        $this->design->assign('source', $source);

        // Вернуть шаблон
        return $this->design->fetch('parsing_item.tpl');
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
     * Сохранить изменения item
     */
    private function saveItem($item)
    {
        $data = [
            'url' => $this->request->post('url', 'string')
        ];

        // Валидация
        $errors = $this->validateItemData($data);
        if (!empty($errors)) {
            return [
                'success' => false,
                'message' => implode(', ', $errors)
            ];
        }

        // Подготовить данные для обновления
        $updateData = [
            'url' => $data['url'],
            'status' => 'pending',
            'parsed_price' => null,
            'last_error' => null,
            'updated_at' => 'NOW()'
        ];

        try {
            // Используем RAW для NOW()
            $query = $this->db->placehold(
                "UPDATE __parsing_items 
                 SET url = ?, status = 'pending', parsed_price = NULL, last_error = NULL, updated_at = NOW() 
                 WHERE id = ? 
                 LIMIT 1",
                $data['url'],
                (int) $item->id
            );
            $this->db->query($query);

            return [
                'success' => true,
                'message' => 'URL обновлен успешно'
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Ошибка при обновлении URL: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Валидировать данные item
     */
    private function validateItemData($data)
    {
        $errors = [];

        // URL обязателен
        if (empty($data['url'])) {
            $errors[] = 'URL товара обязателен';
        } elseif (!filter_var($data['url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'URL должен начинаться с http:// или https://';
        }

        return $errors;
    }
}
