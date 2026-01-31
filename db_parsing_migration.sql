-- Миграция для создания таблиц парсинга цен
-- Создание таблиц для управления парсингом цен с других сайтов

-- Таблица источников парсинга
CREATE TABLE IF NOT EXISTS `t_parsing_sources` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL COMMENT 'Название источника',
  `base_url` VARCHAR(500) NOT NULL COMMENT 'Базовый URL источника',
  `selector_price` VARCHAR(255) NOT NULL COMMENT 'CSS-селектор для цены',
  `selector_article` VARCHAR(255) NOT NULL COMMENT 'CSS-селектор для артикула',
  `price_min_bound` DECIMAL(10, 2) DEFAULT NULL COMMENT 'Минимальная граница цены',
  `price_max_bound` DECIMAL(10, 2) DEFAULT NULL COMMENT 'Максимальная граница цены',
  `is_active` TINYINT(1) NOT NULL DEFAULT 1 COMMENT 'Активен ли источник',
  `last_parsed_at` DATETIME DEFAULT NULL COMMENT 'Время последнего парсинга',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания',
  `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Время обновления',
  PRIMARY KEY (`id`),
  KEY `idx_is_active` (`is_active`),
  KEY `idx_last_parsed_at` (`last_parsed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Источники парсинга цен';

-- Таблица URL-ов для парсинга
CREATE TABLE IF NOT EXISTS `t_parsing_items` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parsing_source_id` INT(11) UNSIGNED NOT NULL COMMENT 'ID источника парсинга',
  `article_reference` VARCHAR(255) NOT NULL COMMENT 'Артикул товара (sku из variants)',
  `url` VARCHAR(1000) NOT NULL COMMENT 'URL товара на сайте источника',
  `parsed_price` DECIMAL(10, 2) DEFAULT NULL COMMENT 'Спарсенная цена',
  `status` ENUM('pending', 'parsed', 'error', 'not_found') NOT NULL DEFAULT 'pending' COMMENT 'Статус парсинга',
  `last_error` TEXT DEFAULT NULL COMMENT 'Последняя ошибка парсинга',
  `last_parsed_at` DATETIME DEFAULT NULL COMMENT 'Время последнего парсинга',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания',
  `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Время обновления',
  PRIMARY KEY (`id`),
  KEY `idx_source_id` (`parsing_source_id`),
  KEY `idx_article` (`article_reference`),
  KEY `idx_status` (`status`),
  KEY `idx_last_parsed_at` (`last_parsed_at`),
  UNIQUE KEY `idx_source_article` (`parsing_source_id`, `article_reference`),
  CONSTRAINT `fk_parsing_items_source` FOREIGN KEY (`parsing_source_id`) 
    REFERENCES `t_parsing_sources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='URL-ы товаров для парсинга';

-- Таблица расписаний парсинга
CREATE TABLE IF NOT EXISTS `t_parsing_schedules` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parsing_source_id` INT(11) UNSIGNED NOT NULL COMMENT 'ID источника парсинга',
  `cron_expression` VARCHAR(100) NOT NULL COMMENT 'Cron-выражение',
  `is_active` TINYINT(1) NOT NULL DEFAULT 1 COMMENT 'Активно ли расписание',
  `next_run_at` DATETIME DEFAULT NULL COMMENT 'Время следующего запуска',
  `last_run_at` DATETIME DEFAULT NULL COMMENT 'Время последнего запуска',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания',
  `updated_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Время обновления',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_source_id` (`parsing_source_id`),
  KEY `idx_is_active` (`is_active`),
  KEY `idx_next_run_at` (`next_run_at`),
  CONSTRAINT `fk_parsing_schedules_source` FOREIGN KEY (`parsing_source_id`) 
    REFERENCES `t_parsing_sources` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Расписания парсинга';

-- Таблица логов парсинга
CREATE TABLE IF NOT EXISTS `t_parsing_logs` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parsing_source_id` INT(11) UNSIGNED DEFAULT NULL COMMENT 'ID источника парсинга',
  `parsing_item_id` INT(11) UNSIGNED DEFAULT NULL COMMENT 'ID item парсинга',
  `product_id` INT(11) UNSIGNED DEFAULT NULL COMMENT 'ID товара',
  `action` VARCHAR(50) NOT NULL COMMENT 'Действие (source_created, parse_start, price_updated, error, и т.д.)',
  `message` TEXT DEFAULT NULL COMMENT 'Сообщение/описание',
  `old_price` DECIMAL(10, 2) DEFAULT NULL COMMENT 'Старая цена',
  `new_price` DECIMAL(10, 2) DEFAULT NULL COMMENT 'Новая цена',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Время создания',
  PRIMARY KEY (`id`),
  KEY `idx_source_id` (`parsing_source_id`),
  KEY `idx_item_id` (`parsing_item_id`),
  KEY `idx_product_id` (`product_id`),
  KEY `idx_action` (`action`),
  KEY `idx_created_at` (`created_at`),
  CONSTRAINT `fk_parsing_logs_source` FOREIGN KEY (`parsing_source_id`) 
    REFERENCES `t_parsing_sources` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fk_parsing_logs_item` FOREIGN KEY (`parsing_item_id`) 
    REFERENCES `t_parsing_items` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Логи парсинга';
