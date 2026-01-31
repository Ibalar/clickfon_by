<?php

require_once 'api/Turbo.php';

class ParsingSourcesAdmin extends Turbo
{
    public function fetch()
    {
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        $page = max(1, (int)$this->request->get('page', 'integer', 1));
        $limit = 20;
        $offset = ($page - 1) * $limit;

        $sources = $this->parsing->getSources([
            'limit' => $limit,
            'offset' => $offset,
            'is_active' => null
        ]);

        $allSources = $this->parsing->getSources([]);
        $totalCount = count($allSources);
        $totalPages = ceil($totalCount / $limit);

        $this->design->assign('sources', $sources);
        $this->design->assign('page', $page);
        $this->design->assign('total_count', $totalCount);
        $this->design->assign('total_pages', $totalPages);
        $this->design->assign('limit', $limit);

        return $this->design->fetch('parsing_sources.tpl');
    }
}
