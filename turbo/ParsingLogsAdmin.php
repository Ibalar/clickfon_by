<?php

require_once 'api/Turbo.php';

class ParsingLogsAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            return false;
        }

        $filter = [];
        $filter['limit'] = 50;
        
        $page = $this->request->get('page', 'integer');
        if (empty($page)) $page = 1;
        $filter['offset'] = ($page - 1) * $filter['limit'];

        // Получить параметры фильтрации
        $sourceId = $this->request->get('source_id', 'integer');
        if (!empty($sourceId)) {
            $filter['source_id'] = $sourceId;
        }

        $action = $this->request->get('action', 'string');
        if (!empty($action)) {
            $filter['action'] = $action;
        }

        $dateFrom = $this->request->get('date_from', 'string');
        if (!empty($dateFrom)) {
            $filter['date_from'] = $dateFrom;
        }

        $dateTo = $this->request->get('date_to', 'string');
        if (!empty($dateTo)) {
            $filter['date_to'] = $dateTo;
        }

        $search = $this->request->get('search', 'string');
        if (!empty($search)) {
            $filter['search'] = $search;
        }

        // Получить логи с фильтрацией
        $logs = $this->parsing->getLogs($filter);
        $totalCount = $this->parsing->countLogs($filter);
        $pagesCount = ceil($totalCount / $filter['limit']);

        // Получить список источников для фильтра (dropdown)
        $sources = $this->parsing->getSources();

        // Передать в Smarty все переменные
        $this->design->assign('logs', $logs);
        $this->design->assign('sources', $sources);
        $this->design->assign('current_page', $page);
        $this->design->assign('total_count', $totalCount);
        $this->design->assign('pages_count', $pagesCount);
        $this->design->assign('current_source', $sourceId);
        $this->design->assign('current_action', $action);
        $this->design->assign('date_from', $dateFrom);
        $this->design->assign('date_to', $dateTo);
        $this->design->assign('search_query', $search);

        return $this->design->fetch('parsing_logs.tpl');
    }
}
