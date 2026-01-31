<div class="admin-content">
    <div class="admin-header">
        <div>
            <a href="?module=ParsingItemsAdmin&source_id={$source->id}" class="btn btn-secondary" style="margin-bottom: 10px; display: inline-block;">← Назад к списку URL-ов</a>
            <h2>Редактировать URL: {$item->article_reference|escape}</h2>
        </div>
    </div>

    {if isset($message_success)}
        <div class="alert alert-success">
            ✓ {$message_success}
        </div>
    {/if}

    {if isset($message_error)}
        <div class="alert alert-danger">
            ✕ {$message_error}
        </div>
    {/if}

    <div class="admin-grid">
        <div class="admin-main">
            <form method="POST" class="admin-form" id="itemForm">
                <fieldset>
                    <legend>Основная информация</legend>

                    <div class="info-block">
                        <div class="info-row">
                            <span class="info-label">Источник:</span>
                            <span class="info-value"><strong>{$source->name|escape}</strong></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Артикул товара:</span>
                            <span class="info-value"><strong>{$item->article_reference|escape}</strong></span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Статус:</span>
                            <span class="info-value">
                                {if $item->status == 'pending'}
                                    <span class="badge badge-warning">⏳ Ожидает</span>
                                {elseif $item->status == 'parsed'}
                                    <span class="badge badge-success">✓ Спарсено</span>
                                {elseif $item->status == 'error'}
                                    <span class="badge badge-danger">✕ Ошибка</span>
                                {elseif $item->status == 'not_found'}
                                    <span class="badge badge-orange">⚠ Не найдено</span>
                                {/if}
                            </span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Дата создания:</span>
                            <span class="info-value">{$item->created_at|date_format:'%d.%m.%Y %H:%M'}</span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Последнее обновление:</span>
                            <span class="info-value">{$item->updated_at|date_format:'%d.%m.%Y %H:%M'}</span>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Редактирование URL</legend>

                    <div class="form-group">
                        <label for="url">URL товара <span class="required">*</span></label>
                        <input type="url" id="url" name="url" class="form-control" 
                               value="{$item->url|escape}" 
                               placeholder="https://example.com/product/123" required>
                        <small class="form-text">Полный URL товара на сайте источника</small>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Информация о парсинге</legend>

                    <div class="info-block parsing-info">
                        <div class="info-row">
                            <span class="info-label">Статус:</span>
                            <span class="info-value">
                                {if $item->status == 'pending'}
                                    <span class="badge badge-warning">⏳ Ожидает</span>
                                {elseif $item->status == 'parsed'}
                                    <span class="badge badge-success">✓ Спарсено</span>
                                {elseif $item->status == 'error'}
                                    <span class="badge badge-danger">✕ Ошибка</span>
                                {elseif $item->status == 'not_found'}
                                    <span class="badge badge-orange">⚠ Не найдено</span>
                                {/if}
                            </span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Спарсенная цена:</span>
                            <span class="info-value">
                                {if $item->parsed_price !== null}
                                    <strong class="text-success">{$item->parsed_price}</strong>
                                {else}
                                    <span style="color: #999;">—</span>
                                {/if}
                            </span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Последняя ошибка:</span>
                            <span class="info-value">
                                {if $item->last_error}
                                    <span class="text-danger">{$item->last_error|escape}</span>
                                {else}
                                    <span style="color: #999;">—</span>
                                {/if}
                            </span>
                        </div>
                        <div class="info-row">
                            <span class="info-label">Время парсинга:</span>
                            <span class="info-value">
                                {if $item->last_parsed_at}
                                    {$item->last_parsed_at|date_format:'%d.%m.%Y %H:%M'}
                                {else}
                                    <span style="color: #999;">Никогда</span>
                                {/if}
                            </span>
                        </div>
                    </div>

                    <div id="parse-result" style="display: none; margin-top: 15px;">
                        <div class="alert" id="parse-result-alert"></div>
                    </div>
                </fieldset>

                <div class="form-actions">
                    <button type="button" class="btn btn-info btn-lg" onclick="parseItemNow({$item->id})">
                        ▶ Переспарсить сейчас
                    </button>
                    <button type="submit" class="btn btn-primary btn-lg">
                        Сохранить изменения
                    </button>
                    <a href="?module=ParsingItemsAdmin&source_id={$source->id}" class="btn btn-secondary btn-lg">Назад</a>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.admin-content {
    padding: 20px;
}

.admin-header {
    margin-bottom: 30px;
}

.admin-header h2 {
    margin: 0;
}

.admin-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

.admin-main {
    max-width: 800px;
}

.admin-form {
    background: white;
    padding: 20px;
    border-radius: 4px;
}

fieldset {
    border: none;
    padding: 20px 0;
    margin: 0;
    border-bottom: 1px solid #eee;
}

fieldset:last-of-type {
    border-bottom: none;
}

legend {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    padding: 0 0 15px 0;
    margin: 0;
}

.info-block {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 4px;
    border: 1px solid #eee;
}

.info-row {
    display: flex;
    margin-bottom: 12px;
}

.info-row:last-child {
    margin-bottom: 0;
}

.info-label {
    width: 180px;
    color: #666;
    font-weight: 500;
}

.info-value {
    flex: 1;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #333;
}

.required {
    color: #dc3545;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
}

.form-control:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
}

.form-text {
    display: block;
    margin-top: 5px;
    color: #666;
    font-size: 12px;
}

.form-actions {
    display: flex;
    gap: 10px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eee;
    flex-wrap: wrap;
}

.btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    transition: background 0.2s;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-primary:hover {
    background: #0056b3;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background: #545b62;
}

.btn-info {
    background: #17a2b8;
    color: white;
}

.btn-info:hover {
    background: #117a8b;
}

.btn-lg {
    padding: 12px 30px;
    font-size: 16px;
}

.alert {
    padding: 12px 15px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.alert-info {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
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

.text-success {
    color: #28a745;
}

.text-danger {
    color: #dc3545;
}

@media (max-width: 768px) {
    .admin-header {
        flex-direction: column;
        gap: 15px;
    }

    .info-row {
        flex-direction: column;
    }

    .info-label {
        width: 100%;
        margin-bottom: 5px;
    }

    .form-actions {
        flex-direction: column;
    }

    .btn-lg {
        width: 100%;
        text-align: center;
    }
}
</style>

<script>
function parseItemNow(itemId) {
    if (!confirm('Переспарсить этот URL?')) {
        return;
    }

    const resultDiv = document.getElementById('parse-result');
    const resultAlert = document.getElementById('parse-result-alert');
    
    resultDiv.style.display = 'block';
    resultAlert.className = 'alert alert-info';
    resultAlert.textContent = 'Выполняется парсинг...';

    fetch('/ajax/parsing_run_single_item.php?id=' + itemId)
        .then(r => r.json())
        .then(data => {
            if (data.status === 'ok') {
                resultAlert.className = 'alert alert-success';
                let message = 'Успешно спарсено!';
                if (data.price) {
                    message += ' Цена: ' + data.price;
                }
                if (data.price_updated) {
                    message += ' (Цена товара обновлена!)';
                    alert('Цена товара успешно обновлена! Новая цена: ' + data.price);
                }
                resultAlert.textContent = message;
                
                // Перезагрузить страницу через 1.5 секунды для обновления данных
                setTimeout(function() {
                    location.reload();
                }, 1500);
            } else {
                resultAlert.className = 'alert alert-danger';
                resultAlert.textContent = 'Ошибка: ' + data.message;
            }
        })
        .catch(error => {
            resultAlert.className = 'alert alert-danger';
            resultAlert.textContent = 'Ошибка сети: ' + error.message;
        });
}

function validateForm() {
    const url = document.getElementById('url').value.trim();
    
    if (!url) {
        alert('URL товара обязателен');
        return false;
    }
    
    if (!url.match(/^https?:\/\//i)) {
        alert('URL должен начинаться с http:// или https://');
        return false;
    }
    
    return true;
}

// Привязать валидацию к форме
document.getElementById('itemForm').addEventListener('submit', function(e) {
    if (!validateForm()) {
        e.preventDefault();
    }
});
</script>
