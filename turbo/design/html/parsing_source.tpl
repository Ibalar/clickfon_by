<div class="admin-content">
    <div class="admin-header">
        <h2>
            {if $action == 'edit'}
                Редактировать источник: {$source->name}
            {else}
                Добавить новый источник
            {/if}
        </h2>
        <a href="?module=ParsingSourcesAdmin" class="btn btn-secondary">← Назад к списку</a>
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

    <form method="POST" class="admin-form">
        <fieldset>
            <legend>Основные параметры</legend>

            {* Название *}
            <div class="form-group">
                <label for="name">Название источника <span class="required">*</span></label>
                <input type="text" id="name" name="name" class="form-control" 
                       value="{if $source}{$source->name}{/if}" 
                       placeholder="Например: AliExpress" required>
                <small class="form-text">Уникальное название для идентификации источника</small>
            </div>

            {* Base URL *}
            <div class="form-group">
                <label for="base_url">Базовый URL сайта <span class="required">*</span></label>
                <input type="url" id="base_url" name="base_url" class="form-control" 
                       value="{if $source}{$source->base_url}{/if}" 
                       placeholder="https://example.com" required>
                <small class="form-text">Полный URL сайта, с которого будет идти парсинг</small>
            </div>

            {* Селектор цены *}
            <div class="form-group">
                <label for="selector_price">CSS селектор для цены <span class="required">*</span></label>
                <input type="text" id="selector_price" name="selector_price" class="form-control" 
                       value="{if $source}{$source->selector_price}{/if}" 
                       placeholder=".price, span.product-price, div[data-price]" required>
                <small class="form-text">CSS селектор для поиска элемента с ценой. Примеры: <code>.price</code>, <code>span.product-price</code>, <code>div[data-price]</code></small>
            </div>

            {* Селектор артикула *}
            <div class="form-group">
                <label for="selector_article">CSS селектор для артикула <span class="required">*</span></label>
                <input type="text" id="selector_article" name="selector_article" class="form-control" 
                       value="{if $source}{$source->selector_article}{/if}" 
                       placeholder=".sku, span.article-number" required>
                <small class="form-text">CSS селектор для поиска элемента с артикулом/SKU товара</small>
            </div>
        </fieldset>

        <fieldset>
            <legend>Границы цены (опционально)</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price_min_bound">Минимальная граница цены</label>
                    <input type="number" id="price_min_bound" name="price_min_bound" class="form-control" 
                           value="{if $source && $source->price_min_bound}{$source->price_min_bound}{/if}" 
                           placeholder="0.00" step="0.01" min="0">
                    <small class="form-text">Цена ниже этого значения не будет спарсена</small>
                </div>

                <div class="form-group col-md-6">
                    <label for="price_max_bound">Максимальная граница цены</label>
                    <input type="number" id="price_max_bound" name="price_max_bound" class="form-control" 
                           value="{if $source && $source->price_max_bound}{$source->price_max_bound}{/if}" 
                           placeholder="999999.99" step="0.01" min="0">
                    <small class="form-text">Цена выше этого значения не будет спарсена</small>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Статус</legend>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="is_active" name="is_active" class="form-check-input" value="1"
                           {if $source && $source->is_active}checked{elseif !$source}checked{/if}>
                    <label class="form-check-label" for="is_active">
                        Активный источник
                    </label>
                </div>
                <small class="form-text">Неактивные источники не будут парсены по расписанию</small>
            </div>
        </fieldset>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-lg">
                {if $action == 'edit'}Сохранить изменения{else}Добавить источник{/if}
            </button>
            <a href="?module=ParsingSourcesAdmin" class="btn btn-secondary btn-lg">Отмена</a>
        </div>
    </form>

    {* Раздел тестирования селекторов *}
    <hr style="margin-top: 40px;">

    <div class="admin-section">
        <h3>Тест селекторов</h3>
        <p>Введите URL товара для проверки селекторов</p>

        <div class="test-selector-form">
            <div class="form-group">
                <label for="test_url">URL для тестирования</label>
                <input type="url" id="test_url" class="form-control" 
                       placeholder="https://example.com/product/123" required>
            </div>

            <button type="button" class="btn btn-info" onclick="testSelectors()">
                Проверить селекторы
            </button>
        </div>

        <div id="test-results" style="display: none; margin-top: 20px;">
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Результаты тестирования</h5>
                </div>
                <div class="card-body">
                    <div id="test-price-result" style="margin-bottom: 15px;">
                        <strong>Цена:</strong> <span id="test-price-value" style="color: #ccc;">—</span>
                    </div>
                    <div id="test-article-result">
                        <strong>Артикул:</strong> <span id="test-article-value" style="color: #ccc;">—</span>
                    </div>
                </div>
            </div>
        </div>

        <div id="test-error" style="display: none; margin-top: 20px;" class="alert alert-danger"></div>
    </div>
</div>

<style>
.admin-content {
    padding: 20px;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
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

.form-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.form-check {
    display: flex;
    align-items: center;
}

.form-check-input {
    width: 18px;
    height: 18px;
    margin-right: 8px;
    cursor: pointer;
}

.form-check-label {
    margin-bottom: 0;
    cursor: pointer;
}

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

.admin-section {
    background: white;
    padding: 20px;
    border-radius: 4px;
    margin-top: 20px;
    max-width: 800px;
}

.admin-section h3 {
    margin-top: 0;
}

.test-selector-form {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 4px;
    margin: 15px 0;
}

.card {
    border: 1px solid #ddd;
    border-radius: 4px;
}

.card-header {
    border-bottom: 1px solid #ddd;
    padding: 12px 15px;
}

.card-body {
    padding: 15px;
}

code {
    background: #f4f4f4;
    padding: 2px 5px;
    border-radius: 3px;
    color: #d63384;
    font-family: 'Courier New', monospace;
}

@media (max-width: 768px) {
    .admin-header {
        flex-direction: column;
        gap: 15px;
    }

    .admin-header h2 {
        width: 100%;
    }

    .form-row {
        grid-template-columns: 1fr;
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
function testSelectors() {
    const url = document.getElementById('test_url').value;
    const selectorPrice = document.getElementById('selector_price').value;
    const selectorArticle = document.getElementById('selector_article').value;

    if (!url) {
        alert('Введите URL для тестирования');
        return;
    }

    if (!selectorPrice || !selectorArticle) {
        alert('Заполните селекторы перед тестированием');
        return;
    }

    // Отправить AJAX запрос на тестирование
    // Позже будет реализовано в отдельном AJAX endpoint
    alert('Тестирование селекторов будет реализовано в следующей задаче');
}
</script>