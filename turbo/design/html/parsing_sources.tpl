<div class="admin-content">
    <div class="admin-header">
        <h2>Источники для парсинга</h2>
        <a href="?module=ParsingSourceAdmin" class="btn btn-primary">+ Добавить источник</a>
    </div>

    {if empty($sources)}
        <div class="alert alert-info">
            Нет источников. <a href="?module=ParsingSourceAdmin">Добавить первый</a>
        </div>
    {else}
        <table class="admin-table table-striped">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="15%">Название</th>
                    <th width="20%">URL</th>
                    <th width="12%">Селектор цены</th>
                    <th width="12%">Селектор артикула</th>
                    <th width="8%">Границы</th>
                    <th width="8%">Статус</th>
                    <th width="12%">Последний парсинг</th>
                    <th width="8%">Действия</th>
                </tr>
            </thead>
            <tbody>
                {foreach $sources as $source}
                    <tr>
                        <td>{$source->id}</td>
                        <td>
                            <a href="?module=ParsingSourceAdmin&action=edit&id={$source->id}">
                                {$source->name}
                            </a>
                        </td>
                        <td>
                            <small title="{$source->base_url}">
                                {if strlen($source->base_url) > 30}
                                    {substr($source->base_url, 0, 27)}...
                                {else}
                                    {$source->base_url}
                                {/if}
                            </small>
                        </td>
                        <td>
                            <code style="font-size: 11px;">{$source->selector_price}</code>
                        </td>
                        <td>
                            <code style="font-size: 11px;">{$source->selector_article}</code>
                        </td>
                        <td>
                            {if $source->price_min_bound || $source->price_max_bound}
                                {if $source->price_min_bound}
                                    {$source->price_min_bound}
                                {/if}
                                {if $source->price_min_bound && $source->price_max_bound}
                                    —
                                {/if}
                                {if $source->price_max_bound}
                                    {$source->price_max_bound}
                                {/if}
                            {else}
                                —
                            {/if}
                        </td>
                        <td>
                            {if $source->is_active}
                                <span class="badge badge-success">Активен</span>
                            {else}
                                <span class="badge badge-secondary">Отключен</span>
                            {/if}
                        </td>
                        <td>
                            {if $source->last_parsed_at}
                                <small>{$source->last_parsed_at|date_format:'%d.%m.%Y %H:%M'}</small>
                            {else}
                                <small style="color: #999;">Никогда</small>
                            {/if}
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="?module=ParsingSourceAdmin&action=edit&id={$source->id}" 
                                   class="btn btn-sm btn-secondary" title="Редактировать">
                                    ✏️
                                </a>
                                <a href="?module=ParsingItemsAdmin&source_id={$source->id}" 
                                   class="btn btn-sm btn-secondary" title="URL-ы">
                                    📋
                                </a>
                                <button class="btn btn-sm btn-info" 
                                        onclick="parseSourceNow({$source->id})" 
                                        title="Парсить сейчас">
                                    ▶️
                                </button>
                                <button class="btn btn-sm btn-danger" 
                                        onclick="deleteSource({$source->id})" 
                                        title="Удалить">
                                    ✕
                                </button>
                            </div>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>

        {* Постраничная навигация *}
        {if $total_pages > 1}
            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Показано {($page-1)*$limit+1} - {min($page*$limit, $total_count)} из {$total_count}
                </div>
                
                <ul class="pagination">
                    {if $page > 1}
                        <li><a href="?module=ParsingSourcesAdmin&page=1">« Первая</a></li>
                        <li><a href="?module=ParsingSourcesAdmin&page={$page-1}">‹ Предыдущая</a></li>
                    {/if}

                    {assign var="start_page" value=max(1, $page-2)}
                    {assign var="end_page" value=min($total_pages, $page+2)}

                    {for $i=$start_page to $end_page}
                        {if $i == $page}
                            <li class="active"><span>{$i}</span></li>
                        {else}
                            <li><a href="?module=ParsingSourcesAdmin&page={$i}">{$i}</a></li>
                        {/if}
                    {/for}

                    {if $page < $total_pages}
                        <li><a href="?module=ParsingSourcesAdmin&page={$page+1}">Следующая ›</a></li>
                        <li><a href="?module=ParsingSourcesAdmin&page={$total_pages}">Последняя »</a></li>
                    {/if}
                </ul>
            </div>
        {/if}
    {/if}
</div>

<script>
function parseSourceNow(sourceId) {
    if (confirm('Запустить парсинг этого источника?')) {
        fetch('/ajax/parsing_run_source.php?id=' + sourceId)
          .then(r => r.json())
          .then(data => {
            if (data.status === 'ok') {
              alert(`Успешно! Спарсено: ${data.parsed}, обновлено: ${data.updated}, ошибок: ${data.errors}`);
              location.reload();
            } else {
              alert('Ошибка: ' + data.message);
            }
          })
          .catch(error => {
            alert('Ошибка сети: ' + error.message);
          });
    }
}

function deleteSource(sourceId) {
    if (confirm('Удалить источник и все связанные URL-ы?')) {
        fetch('/ajax/parsing_delete_source.php?id=' + sourceId)
          .then(r => r.json())
          .then(data => {
            if (data.status === 'ok') {
                alert('Источник удален');
                location.reload();
            } else {
                alert('Ошибка: ' + data.message);
            }
          })
          .catch(error => {
            alert('Ошибка сети: ' + error.message);
          });
    }
}
</script>

<style>
.admin-content {
    padding: 20px;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.admin-header h2 {
    margin: 0;
}

.admin-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    background: #fff;
}

.admin-table thead {
    background: #f5f5f5;
    border-bottom: 2px solid #ddd;
}

.admin-table th {
    padding: 12px;
    text-align: left;
    font-weight: bold;
    color: #333;
}

.admin-table td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

.admin-table tbody tr:hover {
    background: #f9f9f9;
}

.btn-group {
    display: flex;
    gap: 5px;
}

.badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 3px;
    font-size: 12px;
    font-weight: bold;
}

.badge-success {
    background: #28a745;
    color: white;
}

.badge-secondary {
    background: #6c757d;
    color: white;
}

.pagination-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

.pagination {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 5px;
}

.pagination li {
    display: inline;
}

.pagination a, .pagination span {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 3px;
    text-decoration: none;
    color: #333;
    display: inline-block;
}

.pagination a:hover {
    background: #f0f0f0;
    border-color: #999;
}

.pagination li.active span {
    background: #007bff;
    color: white;
    border-color: #007bff;
}

.alert {
    padding: 12px 15px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert-info {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

code {
    background: #f4f4f4;
    padding: 2px 5px;
    border-radius: 3px;
    color: #d63384;
    font-family: 'Courier New', monospace;
}
</style>
