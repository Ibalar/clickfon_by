<div class="admin-content">
    {if $mode == 'select_source'}
        {* Режим выбора источника *}
        <div class="admin-header">
            <h2>URL для парсинга</h2>
            <p>Выберите источник парсинга</p>
        </div>

        {if empty($sources)}
            <div class="alert alert-warning">
                ⚠️ Источников парсинга не найдено.
                <a href="?module=ParsingSourcesAdmin" class="btn btn-primary" style="margin-left: 10px;">
                    Создать источник
                </a>
            </div>
        {else}
            <div class="sources-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                {foreach $sources as $src}
                    <div class="source-card" style="border: 1px solid #ddd; padding: 20px; border-radius: 4px; cursor: pointer;"
                         onclick="window.location.href='?module=ParsingItemsAdmin&source_id={$src->id}'">
                        <h3 style="margin: 0 0 10px 0;">{$src->name|escape}</h3>
                        <p style="color: #666; margin: 5px 0;">
                            <strong>URL:</strong> {$src->base_url|escape}
                        </p>
                        <p style="color: #666; margin: 5px 0;">
                            <strong>Селектор цены:</strong> <code>{$src->selector_price|escape}</code>
                        </p>
                        <p style="color: #666; margin: 5px 0;">
                            <strong>Статус:</strong>
                            {if $src->is_active}
                                <span style="color: green;">✓ Активен</span>
                            {else}
                                <span style="color: red;">✗ Неактивен</span>
                            {/if}
                        </p>
                        {if $src->last_parsed_at}
                            <p style="color: #999; margin: 5px 0; font-size: 12px;">
                                Последний парсинг: {$src->last_parsed_at}
                            </p>
                        {/if}
                    </div>
                {/foreach}
            </div>
        {/if}

        <div style="margin-top: 20px;">
            <a href="?module=ParsingSourcesAdmin" class="btn btn-secondary">
                ← Управление источниками
            </a>
        </div>
    {else}
        {* Режим просмотра элементов источника *}
        <div class="admin-header">
            <div>
                <a href="?module=ParsingSourcesAdmin" class="btn btn-secondary" style="margin-bottom: 10px; display: inline-block;">← Назад к списку источников</a>
                <h2>URL-ы источника: {$source->name|escape}</h2>
            </div>
            <a href="?module=ParsingImportItemsAdmin&source_id={$source->id}" class="btn btn-primary">+ Импортировать URL-ы</a>
        </div>

        <div class="admin-filters" style="margin-bottom: 20px; background: #f9f9f9; padding: 15px; border-radius: 4px; border: 1px solid #eee;">
            <span style="font-weight: bold; margin-right: 10px;">Фильтр по статусу:</span>
            <div class="btn-group">
                <a href="javascript:filterByStatus('')" class="btn btn-sm {if empty($status_filter)}btn-primary{else}btn-secondary{/if}">Все</a>
                <a href="javascript:filterByStatus('pending')" class="btn btn-sm {if $status_filter == 'pending'}btn-warning{else}btn-secondary{/if}">⏳ Ожидает</a>
                <a href="javascript:filterByStatus('parsed')" class="btn btn-sm {if $status_filter == 'parsed'}btn-success{else}btn-secondary{/if}">✓ Спарсено</a>
                <a href="javascript:filterByStatus('error')" class="btn btn-sm {if $status_filter == 'error'}btn-danger{else}btn-secondary{/if}">✕ Ошибка</a>
                <a href="javascript:filterByStatus('not_found')" class="btn btn-sm {if $status_filter == 'not_found'}btn-orange{else}btn-secondary{/if}">⚠ Не найдено</a>
            </div>
        </div>

        {if empty($items)}
            <div class="alert alert-info">
                Нет URL-ов для парсинга. Нажмите на кнопку выше чтобы импортировать URL-ы.
            </div>
        {else}
            <table class="admin-table table-striped">
                <thead>
                    <tr>
                        <th width="5%">ID</th>
                        <th width="10%">Артикул</th>
                        <th width="25%">URL</th>
                        <th width="10%">Статус</th>
                        <th width="10%">Цена</th>
                        <th width="20%">Ошибка</th>
                        <th width="12%">Посл. парсинг</th>
                        <th width="8%">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $items as $item}
                        <tr>
                            <td>{$item->id}</td>
                            <td>
                                <strong>{$item->article_reference|escape}</strong>
                            </td>
                            <td>
                                <small title="{$item->url|escape}">
                                    <a href="{$item->url|escape}" target="_blank">
                                        {if strlen($item->url) > 40}
                                            {substr($item->url, 0, 37)}...
                                        {else}
                                            {$item->url|escape}
                                        {/if}
                                    </a>
                                </small>
                            </td>
                            <td>
                                {if $item->status == 'pending'}
                                    <span class="badge badge-warning" title="Ожидает парсинга">⏳ Ожидает</span>
                                {elseif $item->status == 'parsed'}
                                    <span class="badge badge-success" title="Спарсено">✓ Спарсено</span>
                                {elseif $item->status == 'error'}
                                    <span class="badge badge-danger" title="Ошибка">✕ Ошибка</span>
                                {elseif $item->status == 'not_found'}
                                    <span class="badge badge-orange" title="Не найдено">⚠ Не найдено</span>
                                {/if}
                            </td>
                            <td>
                                {if $item->parsed_price !== null}
                                    <strong>{$item->parsed_price}</strong>
                                {else}
                                    —
                                {/if}
                            </td>
                            <td>
                                {if $item->last_error}
                                    <small class="text-danger" title="{$item->last_error|escape}">
                                        {if strlen($item->last_error) > 50}
                                            {substr($item->last_error, 0, 47)}...
                                        {else}
                                            {$item->last_error|escape}
                                        {/if}
                                    </small>
                                {else}
                                    —
                                {/if}
                            </td>
                            <td>
                                {if $item->last_parsed_at}
                                    <small>{$item->last_parsed_at|date_format:'%d.%m.%Y %H:%M'}</small>
                                {else}
                                    <small style="color: #999;">Никогда</small>
                                {/if}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="?module=ParsingItemAdmin&id={$item->id}"
                                       class="btn btn-sm btn-dark"
                                       title="Редактировать">
                                        ✎
                                    </a>
                                    <button class="btn btn-sm btn-info"
                                            onclick="parseItemNow({$item->id})"
                                            title="Переспарсить">
                                        ▶️
                                    </button>
                                    <button class="btn btn-sm btn-danger"
                                            onclick="deleteItem({$item->id})"
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
            {if $totalPages > 1}
                <div class="pagination-wrapper">
                    <div class="pagination-info">
                        Показано {($currentPage-1)*20+1} - {min($currentPage*20, $totalItems)} из {$totalItems}
                    </div>

                    <ul class="pagination">
                        {if $currentPage > 1}
                            <li><a href="?module=ParsingItemsAdmin&source_id={$source->id}{if $status_filter}&status={$status_filter}{/if}&page=1">« Первая</a></li>
                            <li><a href="?module=ParsingItemsAdmin&source_id={$source->id}{if $status_filter}&status={$status_filter}{/if}&page={$currentPage-1}">‹ Предыдущая</a></li>
                        {/if}

                        {assign var="startPage" value=max(1, $currentPage-2)}
                        {assign var="endPage" value=min($totalPages, $currentPage+2)}

                        {for $i=$startPage to $endPage}
                            {if $i == $currentPage}
                                <li class="active"><span>{$i}</span></li>
                            {else}
                                <li><a href="?module=ParsingItemsAdmin&source_id={$source->id}{if $status_filter}&status={$status_filter}{/if}&page={$i}">{$i}</a></li>
                            {/if}
                        {/for}

                        {if $currentPage < $totalPages}
                            <li><a href="?module=ParsingItemsAdmin&source_id={$source->id}{if $status_filter}&status={$status_filter}{/if}&page={$currentPage+1}">Следующая ›</a></li>
                            <li><a href="?module=ParsingItemsAdmin&source_id={$source->id}{if $status_filter}&status={$status_filter}{/if}&page={$totalPages}">Последняя »</a></li>
                        {/if}
                    </ul>
                </div>
            {/if}
        {/if}
    {/if}
</div>

{if $mode == 'items_list'}
{literal}
<script>
function filterByStatus(status) {
    let url = '?module=ParsingItemsAdmin&source_id={/literal}{$source->id}{literal}';
    if (status) {
        url += '&status=' + status;
    }
    window.location.href = url;
}

function parseItemNow(itemId) {
    if (confirm('Переспарсить этот URL?')) {
        fetch('/ajax/parsing_run_single_item.php?id=' + itemId)
          .then(r => r.json())
          .then(data => {
            if (data.status === 'ok') {
              alert(`Успешно спарсено! Цена: ${data.price}`);
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

function deleteItem(itemId) {
    if (confirm('Удалить этот URL?')) {
        fetch('/ajax/parsing_delete_item.php?id=' + itemId)
          .then(r => r.json())
          .then(data => {
            if (data.status === 'ok') {
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
{/literal}

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

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
    font-size: 14px;
    border: 1px solid transparent;
}

.btn-sm {
    padding: 4px 8px;
    font-size: 12px;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-info {
    background: #17a2b8;
    color: white;
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-warning {
    background: #ffc107;
    color: #212529;
}

.btn-dark {
    background: #343a40;
    color: white;
}

.badge {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 3px;
    font-size: 11px;
    font-weight: bold;
    text-transform: uppercase;
}

.badge-success {
    background: #28a745;
    color: white;
}

.badge-warning {
    background: #ffc107;
    color: #212529;
}

.badge-danger {
    background: #dc3545;
    color: white;
}

.badge-orange {
    background: #fd7e14;
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

.alert-warning {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeaa7;
}

.text-danger {
    color: #dc3545;
}
</style>
{/if}
