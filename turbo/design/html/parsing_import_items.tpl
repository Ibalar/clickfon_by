<div class="admin-content">
    <div class="admin-header">
        <div>
            <a href="?module=ParsingItemsAdmin&source_id={$source->id}" class="btn btn-secondary" style="margin-bottom: 10px; display: inline-block;">← Назад к списку URL-ов</a>
            <h2>Импорт URL-ов для: {$source->name|escape}</h2>
        </div>
    </div>

    {* Сообщения об успехе или ошибке *}
    {if isset($message_success)}
        <div class="alert alert-success">
            ✓ Импорт завершен!
        </div>
    {/if}

    {if isset($message_error)}
        <div class="alert alert-danger">
            ✕ 
            {if $message_error == 'permission_denied'}
                Недостаточно прав для выполнения операции
            {elseif $message_error == 'source_not_found'}
                Источник не найден
            {elseif $message_error == 'invalid_file_extension'}
                Неподдерживаемый формат файла. Разрешены: CSV, TXT
            {elseif $message_error == 'file_too_large'}
                Файл слишком большой. Максимальный размер: 10MB
            {elseif $message_error == 'upload_error'}
                Ошибка при загрузке файла
            {elseif $message_error == 'file_create_error'}
                Ошибка при создании временного файла
            {elseif $message_error == 'no_data_provided'}
                Не указан файл для импорта и не введен текст
            {else}
                {$message_error}
            {/if}
        </div>
    {/if}

    {* Результаты импорта *}
    {if isset($import_result)}
        <div class="import-results">
            <div class="alert {if $import_result.success > 0}alert-success{else}alert-warning{/if}">
                <h4>Результаты импорта:</h4>
                <ul style="margin: 10px 0; padding-left: 20px;">
                    <li><strong>Успешно импортировано:</strong> {$import_result.success}</li>
                    <li><strong>Ошибок:</strong> {$import_result.failed}</li>
                </ul>
            </div>

            {if !empty($import_result.errors)}
                <div class="alert alert-danger">
                    <h4>Ошибки при импорте:</h4>
                    <ul class="error-list">
                        {foreach $import_result.errors as $error}
                            <li>{$error|escape}</li>
                        {/foreach}
                    </ul>
                </div>
            {/if}

            <div class="form-actions">
                <a href="?module=ParsingItemsAdmin&source_id={$source->id}" class="btn btn-primary">
                    ← Назад к URL-ам
                </a>
                <a href="?module=ParsingImportItemsAdmin&source_id={$source->id}" class="btn btn-secondary">
                    Импортировать еще
                </a>
            </div>
        </div>
    {else}
        {* Форма импорта *}
        <form method="POST" enctype="multipart/form-data" class="admin-form" onsubmit="return validateImportForm();">
            <input type="hidden" name="session_id" value="{$smarty.session.id}">

            <fieldset>
                <legend>Режим импорта</legend>

                <div class="form-group radio-group">
                    <div class="radio-option">
                        <input type="radio" id="mode_create" name="mode" value="create" class="radio-input">
                        <label for="mode_create" class="radio-label">
                            <strong>Только новые</strong>
                            <span class="radio-description">— пропустить существующие записи</span>
                        </label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" id="mode_update" name="mode" value="update" class="radio-input">
                        <label for="mode_update" class="radio-label">
                            <strong>Только обновление</strong>
                            <span class="radio-description">— обновить только существующие записи</span>
                        </label>
                    </div>

                    <div class="radio-option">
                        <input type="radio" id="mode_create_or_update" name="mode" value="create_or_update" class="radio-input" checked>
                        <label for="mode_create_or_update" class="radio-label">
                            <strong>Создать или обновить</strong>
                            <span class="radio-description">— создать новые, обновить существующие (рекомендуется)</span>
                        </label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Данные для импорта</legend>

                {* Способ 1: Загрузка файла *}
                <div class="form-group">
                    <label for="file">Загрузить файл (CSV, TXT)</label>
                    <input type="file" id="file" name="file" class="form-control-file" accept=".csv,.txt">
                    <small class="form-text">Поддерживаются форматы: CSV, TXT. Максимальный размер: 10MB</small>
                </div>

                <div class="or-divider">
                    <span>ИЛИ</span>
                </div>

                {* Способ 2: Вставить текст *}
                <div class="form-group">
                    <label for="text_data">Вставить текст вручную</label>
                    <textarea id="text_data" name="text_data" class="form-control" rows="10" placeholder="SKU001,https://example.com/product/1&#10;SKU002,https://example.com/product/2&#10;SKU003,https://example.com/product/3"></textarea>
                    <small class="form-text">Введите данные построчно в формате: Артикул,URL</small>
                </div>
            </fieldset>

            <fieldset>
                <legend>Примеры форматов</legend>

                <div class="format-examples">
                    <div class="format-tabs">
                        <button type="button" class="format-tab active" onclick="showFormatExample('csv')">CSV</button>
                        <button type="button" class="format-tab" onclick="showFormatExample('txt')">TXT</button>
                        <button type="button" class="format-tab" onclick="showFormatExample('tsv')">TSV</button>
                    </div>

                    <div class="format-content" id="format-csv">
                        <pre><code>SKU001,https://example.com/product/1
SKU002,https://example.com/product/2
SKU003,https://example.com/product/3</code></pre>
                        <small>Разделитель: запятая или точка с запятой</small>
                    </div>

                    <div class="format-content" id="format-txt" style="display: none;">
                        <pre><code>SKU001|https://example.com/product/1
SKU002|https://example.com/product/2
SKU003|https://example.com/product/3</code></pre>
                        <small>Разделитель: вертикальная черта (pipe)</small>
                    </div>

                    <div class="format-content" id="format-tsv" style="display: none;">
                        <pre><code>SKU001	https://example.com/product/1
SKU002	https://example.com/product/2
SKU003	https://example.com/product/3</code></pre>
                        <small>Разделитель: табуляция (Tab)</small>
                    </div>
                </div>

                <div style="margin-top: 15px;">
                    <button type="button" class="btn btn-info" onclick="downloadTemplate()">
                        Скачать шаблон
                    </button>
                </div>
            </fieldset>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-lg">Импортировать</button>
                <a href="?module=ParsingItemsAdmin&source_id={$source->id}" class="btn btn-secondary btn-lg">Отмена</a>
            </div>
        </form>
    {/if}
</div>

<script>
/**
 * Validate import form
 */
function validateImportForm() {
    const fileInput = document.getElementById('file');
    const textInput = document.getElementById('text_data');

    if (!fileInput.value && !textInput.value.trim()) {
        alert('Пожалуйста, выберите файл для загрузки или введите данные в текстовое поле');
        return false;
    }

    if (fileInput.value) {
        const allowedExtensions = ['csv', 'txt'];
        const fileName = fileInput.value.toLowerCase();
        const extension = fileName.split('.').pop();

        if (!allowedExtensions.includes(extension)) {
            alert('Неподдерживаемый формат файла. Разрешены: CSV, TXT');
            return false;
        }
    }

    return true;
}

/**
 * Show format example
 */
function showFormatExample(format) {
    // Hide all content
    document.querySelectorAll('.format-content').forEach(function(el) {
        el.style.display = 'none';
    });

    // Remove active class from all tabs
    document.querySelectorAll('.format-tab').forEach(function(el) {
        el.classList.remove('active');
    });

    // Show selected content
    document.getElementById('format-' + format).style.display = 'block';

    // Add active class to clicked tab
    event.target.classList.add('active');
}

/**
 * Download template file
 */
function downloadTemplate() {
    const content = "SKU001,https://example.com/product/1\nSKU002,https://example.com/product/2\nSKU003,https://example.com/product/3";
    const blob = new Blob([content], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'parsing_import_template.csv';
    document.body.appendChild(a);
    a.click();
    window.URL.revokeObjectURL(url);
    document.body.removeChild(a);
}
</script>

<style>
.admin-content {
    padding: 20px;
}

.admin-header {
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
}

.admin-header h2 {
    margin: 0;
}

.admin-form {
    background: white;
    padding: 20px;
    border-radius: 4px;
    max-width: 800px;
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

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #333;
}

.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
    box-sizing: border-box;
}

.form-control:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
}

.form-control-file {
    padding: 8px 0;
}

.form-text {
    display: block;
    margin-top: 5px;
    color: #666;
    font-size: 12px;
}

/* Radio buttons */
.radio-group {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.radio-option {
    display: flex;
    align-items: flex-start;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s;
}

.radio-option:hover {
    background: #f8f9fa;
}

.radio-input {
    margin-right: 10px;
    margin-top: 3px;
}

.radio-label {
    cursor: pointer;
    flex: 1;
}

.radio-description {
    color: #666;
    font-weight: normal;
}

/* Divider */
.or-divider {
    display: flex;
    align-items: center;
    margin: 20px 0;
    color: #666;
}

.or-divider::before,
.or-divider::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #ddd;
}

.or-divider span {
    padding: 0 15px;
    font-size: 12px;
    text-transform: uppercase;
}

/* Format examples */
.format-examples {
    background: #f8f9fa;
    border-radius: 4px;
    overflow: hidden;
}

.format-tabs {
    display: flex;
    background: #e9ecef;
}

.format-tab {
    flex: 1;
    padding: 10px;
    border: none;
    background: transparent;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.2s;
}

.format-tab:hover {
    background: #dee2e6;
}

.format-tab.active {
    background: #f8f9fa;
    font-weight: bold;
}

.format-content {
    padding: 15px;
}

.format-content pre {
    margin: 0 0 10px 0;
    background: #fff;
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #ddd;
    overflow-x: auto;
}

.format-content code {
    font-family: 'Courier New', monospace;
    font-size: 13px;
    color: #333;
}

/* Buttons */
.form-actions {
    display: flex;
    gap: 10px;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #eee;
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

/* Alerts */
.alert {
    padding: 15px;
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

.alert-warning {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeeba;
}

.alert h4 {
    margin: 0 0 10px 0;
}

/* Error list */
.error-list {
    max-height: 300px;
    overflow-y: auto;
    margin: 0;
    padding-left: 20px;
}

.error-list li {
    margin-bottom: 5px;
}

/* Import results */
.import-results {
    max-width: 800px;
}

/* Responsive */
@media (max-width: 768px) {
    .admin-header {
        flex-direction: column;
        gap: 15px;
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
