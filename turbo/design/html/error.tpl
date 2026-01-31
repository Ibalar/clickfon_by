<div class="admin-content">
    <div class="error-container" style="padding: 40px; text-align: center;">
        <div class="alert alert-danger" style="max-width: 600px; margin: 0 auto;">
            <h3>⚠️ Ошибка</h3>
            
            {if isset($message_error)}
                <p>
                    {if $message_error === 'permission_denied'}
                        У вас нет прав доступа к этому разделу.
                    {elseif $message_error === 'source_not_found'}
                        Источник парсинга не найден.
                    {elseif $message_error === 'item_not_found'}
                        Элемент парсинга не найден.
                    {elseif $message_error === 'invalid_id'}
                        Неверный ID.
                    {else}
                        {$message_error}
                    {/if}
                </p>
            {else}
                <p>Произошла неизвестная ошибка. Пожалуйста, попробуйте снова.</p>
            {/if}
            
            <hr style="border: none; border-top: 1px solid #ddd; margin: 20px 0;">
            
            <a href="?module=ParsingSourcesAdmin" class="btn btn-primary">
                ← Вернуться к источникам парсинга
            </a>
        </div>
    </div>
</div>

<style>
    .error-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 300px;
    }
    
    .alert {
        border-radius: 8px;
        padding: 30px;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    
    .alert h3 {
        margin: 0 0 15px 0;
        color: #721c24;
    }
    
    .alert p {
        margin: 10px 0;
        line-height: 1.6;
    }
</style>