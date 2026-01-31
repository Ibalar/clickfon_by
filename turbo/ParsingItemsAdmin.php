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
        $source_id = $this->request->get('source_id', 'integer');
        if (empty($source_id)) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Получить source и убедиться что он существует
        $source = $this->parsing->getSource($source_id);
        if (empty($source)) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Получить параметры фильтрации (page, status)
        $page = max(1, (int)$this->request->get('page', 'integer', 1));
        $status = $this->request->get('status', 'string');
        $limit = 20;

        // Получить items с фильтрацией и пагинацией
        $filter = ['limit' => $limit, 'offset' => ($page - 1) * $limit];
        if (!empty($status)) {
            $filter['status'] = $status;
        }
        $items = $this->parsing->getItems($source_id, $filter);

        // Получить общий счетчик для пагинации (без лимита)
        $count_filter = [];
        if (!empty($status)) {
            $count_filter['status'] = $status;
        }
        $all_items = $this->parsing->getItems($source_id, $count_filter);
        $total_count = count($all_items);
        $total_pages = ceil($total_count / $limit);

        // Передать в Smarty: items, source, page, total_count, total_pages, current_status
        $this->design->assign('items', $items);
        $this->design->assign('source', $source);
        $this->design->assign('page', $page);
        $this->design->assign('total_count', $total_count);
        $this->design->assign('total_pages', $total_pages);
        $this->design->assign('limit', $limit);
        $this->design->assign('current_status', $status);

        // Вернуть шаблон parsing_items.tpl
        return $this->design->fetch('parsing_items.tpl');
    }
}
