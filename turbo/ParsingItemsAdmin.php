<?php

require_once 'api/Turbo.php';

class ParsingItemsAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        // Получить source_id из параметров
        $sourceId = $this->request->get('source_id', 'integer');

        // Если source_id не указан - показать список источников для выбора
        if (empty($sourceId)) {
            $sources = $this->parsing->getSources(['limit' => 100]);
            $this->design->assign('sources', $sources);
            $this->design->assign('mode', 'select_source');
            return $this->design->fetch('parsing_items.tpl');
        }

        // Получить source и убедиться что он существует
        $source = $this->parsing->getSource($sourceId);
        if (empty($source)) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Передать source в Smarty
        $this->design->assign('source', $source);
        $this->design->assign('mode', 'items_list');

        // Получить параметры фильтрации
        $status = $this->request->get('status', 'string');
        $page = $this->request->get('page', 'integer', 1);
        $perPage = 20;
        $offset = ($page - 1) * $perPage;

        // Получить элементы
        $filter = ['limit' => $perPage, 'offset' => $offset];
        if (!empty($status)) {
            $filter['status'] = $status;
        }

        $items = $this->parsing->getItems($sourceId, $filter);

        // Получить общее количество элементов для пагинации
        $allItems = $this->parsing->getItems($sourceId, []);
        $totalItems = count($allItems);
        $totalPages = ceil($totalItems / $perPage);

        $this->design->assign('items', $items);
        $this->design->assign('currentPage', $page);
        $this->design->assign('totalPages', $totalPages);
        $this->design->assign('totalItems', $totalItems);
        $this->design->assign('status_filter', $status);

        // Вернуть шаблон
        return $this->design->fetch('parsing_items.tpl');
    }
}
