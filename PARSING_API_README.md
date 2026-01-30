# Parsing API Documentation

API-сервис для управления парсингом цен с других сайтов.

## Установка

### 1. Установка зависимостей

```bash
composer update
```

Будет установлена библиотека `sunra/php-simple-html-dom-parser` для парсинга HTML.

### 2. Создание таблиц базы данных

Выполните SQL-миграцию из файла `db_parsing_migration.sql`:

```bash
mysql -u username -p database_name < db_parsing_migration.sql
```

Или через phpMyAdmin/другой клиент MySQL.

Будут созданы таблицы:
- `__parsing_sources` - источники парсинга
- `__parsing_items` - URL-ы товаров для парсинга
- `__parsing_schedules` - расписания автоматического парсинга
- `__parsing_logs` - логи всех операций

## Использование API

### Инициализация

```php
require_once 'api/Turbo.php';

$turbo = new Turbo();
$parsing = $turbo->parsing;
```

## Методы API

### 1. Управление источниками парсинга

#### getSources($filter = [])

Получить список источников парсинга.

**Параметры фильтра:**
- `is_active` (int) - фильтр по активности (0/1)
- `limit` (int) - количество записей
- `offset` (int) - смещение для пагинации

**Возвращает:** array объектов источников

**Пример:**
```php
// Получить все активные источники
$sources = $parsing->getSources(['is_active' => 1]);

// Получить первые 10 источников
$sources = $parsing->getSources(['limit' => 10]);
```

#### getSource($id)

Получить один источник по ID.

**Возвращает:** объект источника или false

**Пример:**
```php
$source = $parsing->getSource(1);
if ($source) {
    echo $source->name;
}
```

#### createSource($data)

Создать новый источник парсинга.

**Обязательные параметры:**
- `name` - название источника
- `base_url` - базовый URL сайта
- `selector_price` - CSS-селектор для цены
- `selector_article` - CSS-селектор для артикула

**Опциональные параметры:**
- `price_min_bound` - минимальная граница цены
- `price_max_bound` - максимальная граница цены
- `is_active` - активен ли источник (по умолчанию 1)

**Возвращает:** ID нового источника или false

**Пример:**
```php
$sourceId = $parsing->createSource([
    'name' => 'Конкурент 1',
    'base_url' => 'https://competitor.com',
    'selector_price' => '.product-price span',
    'selector_article' => '.product-sku',
    'price_min_bound' => 100,
    'price_max_bound' => 50000
]);
```

#### updateSource($id, $data)

Обновить источник.

**Возвращает:** true при успехе, false при ошибке

**Пример:**
```php
$parsing->updateSource(1, [
    'name' => 'Конкурент 1 (обновлено)',
    'is_active' => 0
]);
```

#### deleteSource($id)

Удалить источник. Каскадно удаляются все связанные URL-ы, расписания и логи.

**Возвращает:** true/false

### 2. Управление URL-ами для парсинга

#### importUrls($sourceId, $file, $mode = 'create')

Импорт URL-ов из файла.

**Параметры:**
- `$sourceId` - ID источника
- `$file` - путь к файлу (CSV/TXT)
- `$mode` - режим импорта:
  - `'create'` - только новые записи
  - `'update'` - только существующие
  - `'create_or_update'` - upsert (создать или обновить)

**Формат файла:**

Поддерживаются разделители: `,` `;` `|` tab

```
ARTICLE123,https://competitor.com/product/123
ARTICLE456,https://competitor.com/product/456
```

**Возвращает:** 
```php
[
    'success' => 10,  // количество успешно импортированных
    'failed' => 2,    // количество ошибок
    'errors' => []    // массив ошибок
]
```

**Пример:**
```php
$result = $parsing->importUrls(1, '/path/to/urls.csv', 'create_or_update');
echo "Импортировано: {$result['success']}, ошибок: {$result['failed']}";
```

#### getItems($sourceId, $filter = [])

Получить URL-ы для парсинга.

**Параметры фильтра:**
- `status` - статус ('pending', 'parsed', 'error', 'not_found')
- `limit` / `offset` - пагинация

**Возвращает:** array объектов

**Пример:**
```php
// Получить все не спарсенные URL-ы
$items = $parsing->getItems(1, ['status' => 'pending']);
```

#### deleteItem($itemId)

Удалить URL из парсинга.

### 3. Основная логика парсинга

#### parseSource($sourceId)

Запустить парсинг источника.

**Алгоритм:**
1. Проверяет активность источника
2. Получает все pending items
3. Для каждого URL:
   - Парсит цену и артикул
   - Проверяет границы цен
   - Находит товар в базе по артикулу (sku)
   - **Обновляет цену только если спарсенная цена ниже текущей**
   - Обновляет денормализованные поля товара
   - Логирует все операции
4. Обновляет last_parsed_at источника

**Возвращает:**
```php
[
    'parsed' => 50,    // количество спарсенных
    'updated' => 10,   // количество обновленных цен
    'errors' => 5,     // количество ошибок
    'messages' => []   // детальные сообщения
]
```

**Пример:**
```php
$result = $parsing->parseSource(1);
echo "Спарсено: {$result['parsed']}, обновлено цен: {$result['updated']}";
foreach ($result['messages'] as $msg) {
    echo "$msg\n";
}
```

#### testSelector($url, $selector)

Тестирование селектора на URL (для превью в админ-панели).

**Возвращает:**
```php
[
    'status' => 'success',  // или 'error'
    'value' => '1299.99',   // найденное значение
    'message' => '...'
]
```

**Пример:**
```php
$result = $parsing->testSelector(
    'https://competitor.com/product/123',
    '.product-price span'
);

if ($result['status'] == 'success') {
    echo "Найдено значение: {$result['value']}";
}
```

### 4. Управление расписаниями

#### getSchedules($filter = [])

Получить расписания.

**Параметры фильтра:**
- `is_active` - фильтр по активности
- `parsing_source_id` - фильтр по источнику

#### getSchedule($sourceId)

Получить расписание источника по ID источника.

#### createOrUpdateSchedule($sourceId, $cronExpression)

Создать или обновить расписание для источника.

**Поддерживаемые cron-выражения:**
- `0 */6 * * *` - каждые 6 часов
- `0 0 * * *` - ежедневно в полночь
- `30 2 * * *` - ежедневно в 2:30
- `0 */3 * * *` - каждые 3 часа

**Пример:**
```php
// Парсить каждые 6 часов
$parsing->createOrUpdateSchedule(1, '0 */6 * * *');
```

#### deleteSchedule($id)

Удалить расписание.

#### checkAndRunSchedules()

Проверить и запустить расписания, которые должны выполниться.

**Использование в cron:**

Добавьте в crontab для проверки каждую минуту:

```bash
* * * * * /usr/bin/php /path/to/project/cron_parsing.php
```

Создайте файл `cron_parsing.php`:

```php
<?php
require_once 'api/Turbo.php';

$turbo = new Turbo();
$turbo->parsing->checkAndRunSchedules();
```

### 5. Логирование

#### getLogs($filter = [])

Получить логи парсинга.

**Параметры фильтра:**
- `parsing_source_id` - фильтр по источнику
- `parsing_item_id` - фильтр по item
- `action` - фильтр по действию
- `product_id` - фильтр по товару
- `limit` / `offset` - пагинация
- `order` - сортировка (по умолчанию 'created_at DESC')

**Типы действий (action):**
- `source_created` - создан источник
- `source_updated` - обновлен источник
- `source_deleted` - удален источник
- `urls_imported` - импортированы URL-ы
- `parse_start` - начало парсинга источника
- `parse_item_start` - начало парсинга item
- `price_updated` - обновлена цена товара
- `parse_complete` - парсинг завершен
- `schedule_run` - запуск по расписанию
- `error` - ошибка

**Пример:**
```php
// Получить последние 100 логов
$logs = $parsing->getLogs(['limit' => 100]);

// Получить логи обновления цен
$logs = $parsing->getLogs(['action' => 'price_updated']);

// Получить логи конкретного товара
$logs = $parsing->getLogs(['product_id' => 123]);
```

#### clearLogs($olderThanDays = 30)

Удалить логи старше N дней.

**Возвращает:** количество удаленных записей

**Пример:**
```php
// Удалить логи старше 90 дней
$deleted = $parsing->clearLogs(90);
```

## Конфигурация

В классе `Parsing` настраиваются следующие параметры:

- `$userAgents` - массив User-Agent для ротации (5 популярных браузеров)
- `$requestDelay` - задержка между запросами в секундах (по умолчанию 1.5)
- `$urlTimeout` - таймаут на один URL в секундах (по умолчанию 30)
- `$sourceTimeout` - максимальное время парсинга источника в секундах (по умолчанию 300)

## Примеры использования

### Полный цикл работы с парсингом

```php
require_once 'api/Turbo.php';

$turbo = new Turbo();
$parsing = $turbo->parsing;

// 1. Создать источник
$sourceId = $parsing->createSource([
    'name' => 'Конкурент ABC',
    'base_url' => 'https://abc-shop.com',
    'selector_price' => '.price-current',
    'selector_article' => '.sku-code',
    'price_min_bound' => 100,
    'price_max_bound' => 100000
]);

// 2. Импортировать URL-ы
$result = $parsing->importUrls($sourceId, '/path/to/urls.csv', 'create');
echo "Импортировано: {$result['success']}\n";

// 3. Запустить парсинг
$parseResult = $parsing->parseSource($sourceId);
echo "Спарсено: {$parseResult['parsed']}, обновлено: {$parseResult['updated']}\n";

// 4. Настроить расписание (каждые 6 часов)
$parsing->createOrUpdateSchedule($sourceId, '0 */6 * * *');

// 5. Просмотреть логи
$logs = $parsing->getLogs([
    'parsing_source_id' => $sourceId,
    'action' => 'price_updated',
    'limit' => 10
]);

foreach ($logs as $log) {
    echo "{$log->created_at}: {$log->message} (старая цена: {$log->old_price}, новая: {$log->new_price})\n";
}
```

### Тестирование селектора перед созданием источника

```php
// Проверить работу селектора цены
$test = $parsing->testSelector(
    'https://competitor.com/product/123',
    '.product-price .current'
);

if ($test['status'] == 'success') {
    echo "Цена найдена: {$test['value']}\n";
    
    // Создать источник с этим селектором
    $sourceId = $parsing->createSource([
        'name' => 'Конкурент',
        'base_url' => 'https://competitor.com',
        'selector_price' => '.product-price .current',
        'selector_article' => '.sku'
    ]);
} else {
    echo "Ошибка: {$test['message']}\n";
}
```

## Безопасность и производительность

### Rate Limiting

Между запросами к одному источнику автоматически добавляется задержка (по умолчанию 1.5 секунды), чтобы не перегружать сайт-источник.

### Таймауты

- Один URL парсится максимум 30 секунд
- Один источник парсится максимум 300 секунд (5 минут)

### User-Agent

Система ротирует 5 различных User-Agent-ов популярных браузеров для имитации обычных пользователей.

### Логирование

Все операции логируются в таблицу `__parsing_logs`:
- Создание/изменение источников
- Импорт URL-ов
- Старт/завершение парсинга
- Обновления цен (с старым и новым значением)
- Все ошибки

### Денормализация

При обновлении цены варианта автоматически вызывается `updateProductVariantStats()` для обновления денормализованных полей товара (`min_price`, `has_stock` и др.).

## Структура таблиц

### __parsing_sources
- `id` - ID источника
- `name` - название
- `base_url` - базовый URL
- `selector_price` - селектор цены
- `selector_article` - селектор артикула
- `price_min_bound` - минимальная цена
- `price_max_bound` - максимальная цена
- `is_active` - активен ли
- `last_parsed_at` - время последнего парсинга
- `created_at`, `updated_at` - timestamps

### __parsing_items
- `id` - ID записи
- `parsing_source_id` - ID источника
- `article_reference` - артикул (sku из __variants)
- `url` - URL товара
- `parsed_price` - спарсенная цена
- `status` - статус (pending/parsed/error/not_found)
- `last_error` - последняя ошибка
- `last_parsed_at` - время последнего парсинга
- `created_at`, `updated_at` - timestamps

### __parsing_schedules
- `id` - ID расписания
- `parsing_source_id` - ID источника
- `cron_expression` - cron-выражение
- `is_active` - активно ли
- `next_run_at` - время следующего запуска
- `last_run_at` - время последнего запуска
- `created_at`, `updated_at` - timestamps

### __parsing_logs
- `id` - ID записи
- `parsing_source_id` - ID источника
- `parsing_item_id` - ID item
- `product_id` - ID товара
- `action` - действие
- `message` - сообщение
- `old_price` - старая цена
- `new_price` - новая цена
- `created_at` - время создания

## Отладка

### Просмотр последних ошибок

```php
$errors = $parsing->getLogs([
    'action' => 'error',
    'limit' => 20,
    'order' => 'created_at DESC'
]);

foreach ($errors as $error) {
    echo "{$error->created_at}: {$error->message}\n";
}
```

### Просмотр статуса items

```php
$errorItems = $parsing->getItems(1, ['status' => 'error', 'limit' => 10]);

foreach ($errorItems as $item) {
    echo "Артикул: {$item->article_reference}\n";
    echo "URL: {$item->url}\n";
    echo "Ошибка: {$item->last_error}\n\n";
}
```

## Поддержка

При возникновении проблем проверьте:

1. **Корректность селекторов** - используйте `testSelector()` для проверки
2. **Таймауты** - возможно, сайт медленно отвечает
3. **Границы цен** - проверьте `price_min_bound` и `price_max_bound`
4. **Существование артикулов** - все артикулы должны быть в таблице `__variants` (поле `sku`)
5. **Логи** - смотрите таблицу `__parsing_logs` для детальной информации

## Интеграция с админ-панелью

API готов к использованию в админ-панели TurboShop. Необходимо создать соответствующие контроллеры и представления в директории `turbo/`.

Рекомендуемая структура админки:
- `/turbo/ParsingSourcesAdmin.php` - управление источниками
- `/turbo/ParsingItemsAdmin.php` - управление URL-ами
- `/turbo/ParsingSchedulesAdmin.php` - управление расписаниями
- `/turbo/ParsingLogsAdmin.php` - просмотр логов
