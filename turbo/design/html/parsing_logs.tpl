{$meta_title="Логи парсинга" scope=global}

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="d-md-flex mb-3">
            <h1 class="d-inline align-middle me-3">Логи парсинга</h1>
            <div class="d-grid d-sm-block mt-2 mt-md-0">
                <a class="btn btn-secondary" href="index.php?module=ParsingSourcesAdmin"><i data-feather="arrow-left"></i> Назад к источникам</a>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        <div class="card-actions float-end">
            <div class="position-relative collapse-icon">
                <a href="javascript:;" class="collapse-chevron" onclick="toggleFilters()">
                    <i class="align-middle" data-feather="chevron-down"></i>
                </a>
            </div>
        </div>
        <h5 class="card-title mb-0">Фильтры</h5>
    </div>
    <div class="card-body" id="filters-block" {if !$current_source && !$current_action && !$date_from && !$date_to && !$search_query}style="display: none;"{/if}>
        <form method="get" id="filters-form">
            <input type="hidden" name="module" value="ParsingLogsAdmin">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Источник</label>
                    <select name="source_id" class="selectpicker form-control" data-live-search="true">
                        <option value="">Все источники</option>
                        {foreach $sources as $s}
                            <option value="{$s->id}" {if $current_source == $s->id}selected{/if}>{$s->name|escape}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Тип действия</label>
                    <select name="action" class="selectpicker form-control">
                        <option value="">Все действия</option>
                        <option value="source_created" {if $current_action == 'source_created'}selected{/if}>Создание источника</option>
                        <option value="source_updated" {if $current_action == 'source_updated'}selected{/if}>Обновление источника</option>
                        <option value="source_deleted" {if $current_action == 'source_deleted'}selected{/if}>Удаление источника</option>
                        <option value="urls_imported" {if $current_action == 'urls_imported'}selected{/if}>Импорт URL-ов</option>
                        <option value="parse_start" {if $current_action == 'parse_start'}selected{/if}>Начало парсинга</option>
                        <option value="parse_complete" {if $current_action == 'parse_complete'}selected{/if}>Завершение парсинга</option>
                        <option value="parse_item_start" {if $current_action == 'parse_item_start'}selected{/if}>Парсинг товара</option>
                        <option value="price_updated" {if $current_action == 'price_updated'}selected{/if}>Обновление цены</option>
                        <option value="error" {if $current_action == 'error'}selected{/if}>Ошибка</option>
                        <option value="schedule_created" {if $current_action == 'schedule_created'}selected{/if}>Создание расписания</option>
                        <option value="schedule_updated" {if $current_action == 'schedule_updated'}selected{/if}>Обновление расписания</option>
                        <option value="schedule_run" {if $current_action == 'schedule_run'}selected{/if}>Запуск по расписанию</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Дата от</label>
                    <input type="date" name="date_from" class="form-control" value="{$date_from|escape}">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Дата до</label>
                    <input type="date" name="date_to" class="form-control" value="{$date_to|escape}">
                </div>
                <div class="col-md-2 mb-3">
                    <label class="form-label">Поиск</label>
                    <input type="text" name="search" class="form-control" value="{$search_query|escape}" placeholder="Сообщение...">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-end">
                    <button type="button" class="btn btn-secondary" onclick="resetFilters()">Сбросить</button>
                    <button type="submit" class="btn btn-primary">Применить</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th style="width: 150px;">Время</th>
                        <th style="width: 150px;">Источник</th>
                        <th style="width: 180px;">Действие</th>
                        <th>Сообщение</th>
                        <th style="width: 150px;">Цены</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $logs as $log}
                        <tr>
                            <td>{$log->id}</td>
                            <td>{$log->created_at|date_format:"%d.%m.%Y %H:%M:%S"}</td>
                            <td>{$log->source_name|default:"—"|escape}</td>
                            <td>
                                {if $log->action == 'source_created'}<span class="badge bg-secondary"><i data-feather="plus-circle"></i> Создан</span>
                                {elseif $log->action == 'source_updated'}<span class="badge bg-secondary"><i data-feather="edit"></i> Обновлен</span>
                                {elseif $log->action == 'source_deleted'}<span class="badge bg-danger"><i data-feather="trash-2"></i> Удален</span>
                                {elseif $log->action == 'urls_imported'}<span class="badge bg-info"><i data-feather="download"></i> Импорт URL</span>
                                {elseif $log->action == 'parse_start'}<span class="badge bg-warning text-dark"><i data-feather="play"></i> Запуск</span>
                                {elseif $log->action == 'parse_complete'}<span class="badge bg-success"><i data-feather="check-circle"></i> Завершено</span>
                                {elseif $log->action == 'parse_item_start'}<span class="badge bg-warning text-dark"><i data-feather="play-circle"></i> Товар</span>
                                {elseif $log->action == 'price_updated'}<span class="badge bg-success"><i data-feather="dollar-sign"></i> Цена</span>
                                {elseif $log->action == 'error'}<span class="badge bg-danger"><i data-feather="x-circle"></i> Ошибка</span>
                                {elseif $log->action == 'schedule_run'}<span class="badge bg-info"><i data-feather="clock"></i> Расписание</span>
                                {else}<span class="badge bg-secondary">{$log->action}</span>{/if}
                            </td>
                            <td>
                                <div class="text-truncate" style="max-width: 400px;" title="{$log->message|escape}">
                                    {$log->message|escape}
                                </div>
                            </td>
                            <td>
                                {if $log->action == 'price_updated' && ($log->old_price !== null || $log->new_price !== null)}
                                    {$log->old_price|string_format:"%.2f"} &rarr; {$log->new_price|string_format:"%.2f"}
                                {else}
                                    —
                                {/if}
                            </td>
                        </tr>
                    {foreachelse}
                        <tr>
                            <td colspan="6" class="text-center">Логов не найдено</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
        
        {include file='pagination.tpl'}
    </div>
</div>

{js}
<script>
    function toggleFilters() {
        var block = document.getElementById('filters-block');
        if (block.style.display === 'none') {
            block.style.display = 'block';
        } else {
            block.style.display = 'none';
        }
    }
    
    function resetFilters() {
        window.location.href = 'index.php?module=ParsingLogsAdmin';
    }
</script>
{/js}
