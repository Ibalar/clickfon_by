# CLI Commands for TurboShop

This directory contains command-line scripts for automating TurboShop tasks.

## Parsing Schedule Command

### Description

The `ParsingScheduleCommand.php` script checks for active parsing schedules and automatically runs parsing for sources that are due based on their cron schedules.

### Usage

#### Manual Execution
```bash
php cli/ParsingScheduleCommand.php
```

#### Cron Setup

To run the command automatically every 5 minutes (recommended):

```bash
*/5 * * * * /usr/bin/php /path/to/turboshop/cli/ParsingScheduleCommand.php
```

Or to run every minute:

```bash
* * * * * /usr/bin/php /path/to/turboshop/cli/ParsingScheduleCommand.php
```

### Output

The command outputs detailed logs to the console:

```
[2025-01-31 14:30:45] INFO: Проверка активных расписаний...
[2025-01-31 14:30:45] INFO: Найдено расписаний для запуска: 3
[2025-01-31 14:30:46] INFO: Запуск парсинга для источника "Конкурент XYZ" (ID: 1, cron: 0 */6 * * *)
[2025-01-31 14:30:46] INFO: Парсинг источника 1 начат...
[2025-01-31 14:31:22] INFO: Парсинг завершен. Обновлено цен: 15, ошибок: 2
[2025-01-31 14:31:22] INFO: Следующий запуск расписания ID 1 на: 2025-01-31 20:30:45
[2025-01-31 14:31:22] INFO: Расписание ID 1 успешно обновлено
[2025-01-31 14:31:23] INFO: Все расписания обработаны. Время выполнения: 38 сек
```

### Supported Cron Expressions

The command supports standard 5-field cron expressions:

- `0 */6 * * *` - Every 6 hours
- `0 0 * * *` - Daily at midnight
- `30 2 * * *` - Daily at 2:30 AM
- `0 */3 * * *` - Every 3 hours
- `*/15 * * * *` - Every 15 minutes

### Error Handling

- If a source is not found, the command logs a warning and continues
- If parsing fails, the error is logged but other schedules are still processed
- Schedule is only updated after parsing completes (even with errors)
- All errors are logged to both console and `__parsing_logs` table

### Logging

The command logs all actions:
- To console with timestamps and log levels (INFO, WARNING, ERROR)
- To the `__parsing_logs` database table via the Parsing API

### Database Requirements

Ensure the parsing tables are created by running the migration:

```bash
mysql -u username -p database_name < db_parsing_migration.sql
```

Required tables:
- `__parsing_sources` - Parsing sources
- `__parsing_items` - URLs to parse
- `__parsing_schedules` - Schedules for automatic parsing
- `__parsing_logs` - Operation logs

### Troubleshooting

1. **No schedules found**: Ensure schedules are active (`is_active = 1`) and have a valid `next_run_at` in the past
2. **Source not found**: Check that the source exists in `__parsing_sources` table
3. **Parsing errors**: Check `__parsing_logs` table for detailed error messages
4. **Permission issues**: Ensure PHP has read access to all files and write access to logs

### Best Practices

1. Run the command every 5 minutes via cron for optimal schedule accuracy
2. Monitor logs regularly to catch parsing issues early
3. Set appropriate timeout values in `api/Parsing.php` if needed
4. Use `testSelector()` in admin panel to verify selectors before creating schedules
5. Clean old logs periodically using `$parsing->clearLogs(90)` to remove logs older than 90 days
