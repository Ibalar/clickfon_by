<div class="admin-content">
    <div class="admin-header">
        <div>
            <h2>Расписания парсинга</h2>
            <p class="subtitle">Управление автоматическим запуском парсинга по расписанию (cron)</p>
        </div>
        <button class="btn btn-primary" onclick="createNewSchedule()">+ Добавить расписание</button>
    </div>

    {if empty($schedules)}
        <div class="alert alert-info">
            Расписания не созданы. Добавьте расписание для источника парсинга.
        </div>
    {else}
        <table class="admin-table table-striped">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="20%">Источник</th>
                    <th width="15%">Cron-выражение</th>
                    <th width="15%">Следующий запуск</th>
                    <th width="15%">Последний запуск</th>
                    <th width="8%">Статус</th>
                    <th width="20%">Действия</th>
                </tr>
            </thead>
            <tbody>
                {foreach $schedules as $schedule}
                    <tr>
                        <td>{$schedule->id}</td>
                        <td>
                            <a href="?module=ParsingSourceAdmin&action=edit&id={$schedule->parsing_source_id}">
                                {$schedule->source_name|truncate:30}
                            </a>
                        </td>
                        <td>
                            <code>{$schedule->cron_expression}</code>
                        </td>
                        <td>
                            {if $schedule->next_run_at}
                                <small>{$schedule->next_run_at|date_format:'%d.%m.%Y %H:%M:%S'}</small>
                                {if strtotime($schedule->next_run_at) <= time()}
                                    <span class="badge badge-warning" title="Должна была запуститься">⚠️ ПРОСРОЧЕНО</span>
                                {/if}
                            {else}
                                <small style="color: #999;">Не установлено</small>
                            {/if}
                        </td>
                        <td>
                            {if $schedule->last_run_at}
                                <small>{$schedule->last_run_at|date_format:'%d.%m.%Y %H:%M:%S'}</small>
                            {else}
                                <small style="color: #999;">Никогда</small>
                            {/if}
                        </td>
                        <td>
                            {if $schedule->is_active}
                                <span class="badge badge-success">Активно</span>
                            {else}
                                <span class="badge badge-secondary">Отключено</span>
                            {/if}
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-secondary" 
                                        onclick="editSchedule({$schedule->id}, {$schedule->parsing_source_id})" 
                                        title="Редактировать">
                                    ✏️
                                </button>
                                <button class="btn btn-sm btn-info" 
                                        onclick="runScheduleNow({$schedule->id})" 
                                        title="Запустить сейчас (тест)">
                                    ▶️
                                </button>
                                <button class="btn btn-sm btn-danger" 
                                        onclick="deleteSchedule({$schedule->id})" 
                                        title="Удалить">
                                    ✕
                                </button>
                            </div>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>

        {* Пагинация *}
        {if $total_pages > 1}
            <div class="pagination-wrapper">
                <div class="pagination-info">
                    Показано {($page-1)*$limit+1} - {min($page*$limit, $total_count)} из {$total_count}
                </div>
                
                <ul class="pagination">
                    {if $page > 1}
                        <li><a href="?module=ParsingSchedulesAdmin&page=1">« Первая</a></li>
                        <li><a href="?module=ParsingSchedulesAdmin&page={$page-1}">‹ Предыдущая</a></li>
                    {/if}

                    {assign var="start_page" value=max(1, $page-2)}
                    {assign var="end_page" value=min($total_pages, $page+2)}

                    {for $i=$start_page to $end_page}
                        {if $i == $page}
                            <li class="active"><span>{$i}</span></li>
                        {else}
                            <li><a href="?module=ParsingSchedulesAdmin&page={$i}">{$i}</a></li>
                        {/if}
                    {/for}

                    {if $page < $total_pages}
                        <li><a href="?module=ParsingSchedulesAdmin&page={$page+1}">Следующая ›</a></li>
                        <li><a href="?module=ParsingSchedulesAdmin&page={$total_pages}">Последняя »</a></li>
                    {/if}
                </ul>
            </div>
        {/if}
    {/if}
</div>

<!-- Модальное окно редактирования/создания расписания -->
<div id="scheduleModal" class="modal" style="display:none;">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Расписание парсинга</h3>
            <button class="close" onclick="closeScheduleModal()">×</button>
        </div>
        <div class="modal-body">
            <form id="scheduleForm">
                <div class="form-group">
                    <label>Источник парсинга:</label>
                    <select id="scheduleSourceId" required class="form-control">
                        <option value="">-- Выберите источник --</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Cron-выражение:</label>
                    <input type="text" id="scheduleCronExpression" name="cron_expression" 
                           placeholder="0 */6 * * *" required class="form-control">
                    <small class="form-text text-muted">
                        Примеры: <code>0 */6 * * *</code> (каждые 6 часов), 
                        <code>0 0 * * *</code> (ежедневно), 
                        <code>0 0 * * 0</code> (еженедельно в понедельник)
                    </small>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" id="scheduleIsActive" name="is_active" value="1">
                        Активно
                    </label>
                </div>

                <div class="form-group">
                    <label>Следующий запуск:</label>
                    <p id="scheduleNextRunAt" style="padding: 10px; background: #f5f5f5; border-radius: 4px;">
                        Рассчитается при сохранении...
                    </p>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" onclick="closeScheduleModal()">Отмена</button>
            <button class="btn btn-primary" onclick="saveSchedule()">Сохранить</button>
        </div>
    </div>
</div>

<script>
    let editingScheduleId = null;

    function createNewSchedule() {
        editingScheduleId = null;
        
        // Загрузить список источников
        fetch('?module=ParsingSchedulesAdmin&action=getSources', {
            method: 'POST'
        }).then(r => r.json()).then(data => {
            if (data.status === 'ok') {
                const select = document.getElementById('scheduleSourceId');
                select.innerHTML = '<option value="">-- Выберите источник --</option>';
                
                data.sources.forEach(source => {
                    const option = document.createElement('option');
                    option.value = source.id;
                    option.textContent = source.name;
                    select.appendChild(option);
                });

                // Очистить форму
                document.getElementById('scheduleCronExpression').value = '';
                document.getElementById('scheduleIsActive').checked = true;
                document.getElementById('scheduleNextRunAt').textContent = 'Рассчитается при сохранении...';
                
                // Показать модальное окно
                document.getElementById('scheduleModal').style.display = 'block';
            }
        }).catch(error => {
            console.error('Error loading sources:', error);
        });
    }

    function editSchedule(scheduleId, sourceId) {
        editingScheduleId = scheduleId;
        
        // Загрузить список источников
        fetch('?module=ParsingSchedulesAdmin&action=getSources', {
            method: 'POST'
        }).then(r => r.json()).then(data => {
            if (data.status === 'ok') {
                const select = document.getElementById('scheduleSourceId');
                select.innerHTML = '<option value="">-- Выберите источник --</option>';
                
                data.sources.forEach(source => {
                    const option = document.createElement('option');
                    option.value = source.id;
                    option.textContent = source.name;
                    select.appendChild(option);
                });

                // Заполнить форму данными расписания
                const formData = new FormData();
                formData.append('schedule_id', scheduleId);
                
                fetch('?module=ParsingSchedulesAdmin&action=getScheduleData', {
                    method: 'POST',
                    body: formData
                }).then(r => r.json()).then(scheduleData => {
                    if (scheduleData.status === 'ok') {
                        select.value = scheduleData.schedule.parsing_source_id;
                        document.getElementById('scheduleCronExpression').value = scheduleData.schedule.cron_expression;
                        document.getElementById('scheduleIsActive').checked = scheduleData.schedule.is_active;
                        document.getElementById('scheduleNextRunAt').textContent = 
                            new Date(scheduleData.schedule.next_run_at).toLocaleString();
                        document.getElementById('scheduleModal').style.display = 'block';
                    }
                }).catch(error => {
                    console.error('Error loading schedule data:', error);
                });
            }
        }).catch(error => {
            console.error('Error loading sources:', error);
        });
    }

    function saveSchedule() {
        const sourceId = document.getElementById('scheduleSourceId').value;
        const cronExpression = document.getElementById('scheduleCronExpression').value;
        const isActive = document.getElementById('scheduleIsActive').checked ? 1 : 0;

        if (!sourceId || !cronExpression) {
            alert('Заполните все обязательные поля');
            return;
        }

        fetch('?module=ParsingSchedulesAdmin&action=saveSchedule', {
            method: 'POST',
            body: JSON.stringify({
                schedule_id: editingScheduleId,
                source_id: sourceId,
                cron_expression: cronExpression,
                is_active: isActive
            }),
            headers: {'Content-Type': 'application/json'}
        }).then(r => r.json()).then(data => {
            if (data.status === 'ok') {
                alert('Расписание сохранено!\\nСледующий запуск: ' + data.next_run_at);
                location.reload();
            } else {
                alert('Ошибка: ' + data.message);
            }
        }).catch(error => {
            console.error('Error saving schedule:', error);
            alert('Ошибка сохранения: ' + error.message);
        });
    }

    function deleteSchedule(scheduleId) {
        if (!confirm('Вы уверены? Расписание будет удалено.')) return;

        fetch('?module=ParsingSchedulesAdmin&action=deleteSchedule', {
            method: 'POST',
            body: JSON.stringify({schedule_id: scheduleId}),
            headers: {'Content-Type': 'application/json'}
        }).then(r => r.json()).then(data => {
            if (data.status === 'ok') {
                alert('Расписание удалено');
                location.reload();
            } else {
                alert('Ошибка: ' + data.message);
            }
        }).catch(error => {
            console.error('Error deleting schedule:', error);
            alert('Ошибка удаления: ' + error.message);
        });
    }

    function runScheduleNow(scheduleId) {
        if (!confirm('Запустить парсинг по этому расписанию прямо сейчас?')) return;

        const btn = event.target;
        btn.disabled = true;
        btn.textContent = 'Выполняется...';

        fetch('?module=ParsingSchedulesAdmin&action=runScheduleNow', {
            method: 'POST',
            body: JSON.stringify({schedule_id: scheduleId}),
            headers: {'Content-Type': 'application/json'}
        }).then(r => r.json()).then(data => {
            btn.disabled = false;
            btn.textContent = '▶️';
            
            if (data.status === 'ok') {
                alert('Парсинг выполнен!\\n' +
                      'Обработано: ' + (data.parse_result?.parsed || 0) + '\\n' +
                      'Обновлено цен: ' + (data.parse_result?.updated || 0) + '\\n' +
                      'Ошибок: ' + (data.parse_result?.errors || 0));
                location.reload();
            } else {
                alert('Ошибка: ' + data.message);
            }
        }).catch(error => {
            btn.disabled = false;
            btn.textContent = '▶️';
            console.error('Error running schedule:', error);
            alert('Ошибка выполнения: ' + error.message);
        });
    }

    function closeScheduleModal() {
        document.getElementById('scheduleModal').style.display = 'none';
        editingScheduleId = null;
    }

    // Закрыть модальное окно при клике вне его
    window.onclick = function(event) {
        const modal = document.getElementById('scheduleModal');
        if (event.target === modal) {
            modal.style.display = 'none';
            editingScheduleId = null;
        }
    };
</script>

<style>
    .admin-content {
        padding: 20px;
    }

    .admin-header {
        margin-bottom: 20px;
    }

    .admin-header h2 {
        margin: 0 0 5px 0;
    }

    .subtitle {
        color: #666;
        margin: 0;
        font-size: 14px;
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
        font-size: 11px;
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

    .badge-warning {
        background: #ffc107;
        color: #212529;
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
        font-size: 11px;
    }

    .modal {
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 0;
        border: 1px solid #888;
        width: 500px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .modal-header {
        padding: 20px;
        background-color: #f5f5f5;
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header h3 {
        margin: 0;
    }

    .modal-body {
        padding: 20px;
    }

    .modal-footer {
        padding: 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        text-align: right;
    }

    .close {
        background: none;
        border: none;
        font-size: 28px;
        cursor: pointer;
        color: #999;
    }

    .close:hover {
        color: #000;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    .form-control:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
    }

    .form-text {
        display: block;
        margin-top: 5px;
        font-size: 12px;
        color: #666;
    }

    .text-muted {
        color: #6c757d;
    }

    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 12px;
        text-decoration: none;
        display: inline-block;
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

    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .btn-sm {
        padding: 4px 8px;
        font-size: 11px;
    }

    .pagination-info {
        color: #666;
        font-size: 14px;
    }
</style>