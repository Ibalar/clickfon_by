<?php
/**
 * Скрипт для применения миграции: сделать селектор артикула опциональным
 * Запустить: php db_parsing_migration_optional_article.php
 */

require_once 'api/Turbo.php';

$turbo = new Turbo();

echo "Applying migration: Make selector_article optional...\n";

try {
    // Изменить поле selector_article на опциональное
    $query = "ALTER TABLE `__parsing_sources` MODIFY `selector_article` VARCHAR(255) DEFAULT NULL COMMENT 'CSS-селектор для артикула (опционально)'";
    $turbo->db->query($query);

    echo "✓ Migration applied successfully\n";
    echo "  - Field 'selector_article' in table 't_parsing_sources' is now optional\n";
} catch (Exception $e) {
    echo "✗ Migration failed: " . $e->getMessage() . "\n";
    exit(1);
}
