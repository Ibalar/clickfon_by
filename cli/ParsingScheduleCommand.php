<?php

/**
 * Parsing Schedule Command
 *
 * CLI command for automatic parsing based on cron schedules
 *
 * Usage: php cli/ParsingScheduleCommand.php
 *
 * This command checks for active parsing schedules that are ready to run
 * and executes the parsing for each source according to its schedule.
 */

chdir(dirname(__DIR__));

require_once 'api/Turbo.php';

class ParsingScheduleCommand extends Turbo
{
    private $turbo;
    private $parsing;
    private $db;
    private $startTime;

    /**
     * Constructor - Initialize dependencies
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->db;
        $this->parsing = $this->parsing;
        $this->startTime = time();
    }

    /**
     * Main method - Run the command
     */
    public function run()
    {
        $this->log('INFO', 'Проверка активных расписаний...');

        // Get schedules ready to run
        $schedules = $this->getSchedulesToRun();

        if (empty($schedules)) {
            $this->log('INFO', 'Нет расписаний для запуска');
            return;
        }

        $this->log('INFO', 'Найдено расписаний для запуска: ' . count($schedules));

        // Process each schedule
        foreach ($schedules as $schedule) {
            $this->runSchedule($schedule);
        }

        $executionTime = time() - $this->startTime;
        $this->log('INFO', 'Все расписания обработаны. Время выполнения: ' . $executionTime . ' сек');
    }

    /**
     * Get all active schedules that are ready to run
     */
    private function getSchedulesToRun()
    {
        $now = date('Y-m-d H:i:s');

        $query = $this->db->placehold(
            "SELECT 
                id, parsing_source_id, cron_expression, next_run_at, last_run_at
            FROM __parsing_schedules 
            WHERE is_active = 1 
                AND next_run_at IS NOT NULL 
                AND next_run_at <= ?
            ORDER BY next_run_at ASC",
            $now
        );

        $this->db->query($query);
        return $this->db->results();
    }

    /**
     * Run parsing for a single source and update the schedule
     */
    private function runSchedule($schedule)
    {
        $sourceId = (int) $schedule->parsing_source_id;
        $scheduleId = (int) $schedule->id;
        $cronExpression = $schedule->cron_expression;

        // Get source details
        $source = $this->parsing->getSource($sourceId);

        if (!$source) {
            $this->log('WARNING', "Источник ID {$sourceId} не найден, пропуск расписания ID {$scheduleId}");
            return;
        }

        $this->log('INFO', "Запуск парсинга для источника \"{$source->name}\" (ID: {$sourceId}, cron: {$cronExpression})");

        try {
            // Log schedule run start
            $this->parsing->createLog(
                $sourceId,
                null,
                'schedule_run_start',
                "Running scheduled parse: {$cronExpression}"
            );

            $this->log('INFO', "Парсинг источника {$sourceId} начат...");

            // Run parsing
            $result = $this->parsing->parseSource($sourceId);

            $this->log(
                'INFO',
                "Парсинг завершен. Обновлено цен: {$result['updated']}, ошибок: {$result['errors']}"
            );

            // Calculate next run time
            $nextRunAt = $this->parsing->getCronNextRun($cronExpression);

            $this->log('INFO', "Следующий запуск расписания ID {$scheduleId} на: {$nextRunAt}");

            // Update schedule
            $updateQuery = $this->db->placehold(
                "UPDATE __parsing_schedules 
                SET last_run_at = NOW(), next_run_at = ? 
                WHERE id = ?",
                $nextRunAt,
                $scheduleId
            );

            $this->db->query($updateQuery);

            $this->log('INFO', "Расписание ID {$scheduleId} успешно обновлено");

            // Log schedule run complete
            $this->parsing->createLog(
                $sourceId,
                null,
                'schedule_run_complete',
                "Scheduled parse completed: {$result['parsed']} parsed, {$result['updated']} updated, {$result['errors']} errors"
            );

        } catch (Exception $e) {
            $errorMessage = 'Ошибка при выполнении расписания ID ' . $scheduleId . ': ' . $e->getMessage();
            $this->log('ERROR', $errorMessage);

            // Log error to database
            $this->parsing->createLog(
                $sourceId,
                null,
                'schedule_run_error',
                $errorMessage
            );
        }
    }

    /**
     * Log action to console
     */
    private function log($level, $message)
    {
        $timestamp = date('Y-m-d H:i:s');
        echo "[{$timestamp}] {$level}: {$message}\n";
    }
}

// Run the command
$command = new ParsingScheduleCommand();
$command->run();
