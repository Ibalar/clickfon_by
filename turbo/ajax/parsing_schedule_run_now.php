<?php

session_start();

require_once '../../api/Turbo.php';

$turbo = new Turbo();

if (!$turbo->request->checkSession()) {
    trigger_error('Session expired', E_USER_WARNING);
    exit();
}

if (!$turbo->managers->access('parsing')) {
    $result = ['status' => 'error', 'message' => 'Permission denied'];
} else {
    // Get POST parameter
    $scheduleId = (int) $turbo->request->post('schedule_id', 'integer');

    // Validation
    if (empty($scheduleId)) {
        $result = ['status' => 'error', 'message' => 'Schedule ID is required'];
    } else {
        try {
            // Get schedule details
            $query = $turbo->db->placehold(
                "SELECT ps.id, ps.parsing_source_id, ps.cron_expression, ps.next_run_at, s.name as source_name, s.is_active as source_active
                FROM __parsing_schedules ps
                LEFT JOIN __parsing_sources s ON s.id = ps.parsing_source_id
                WHERE ps.id = ?
                LIMIT 1",
                (int) $scheduleId
            );
            $turbo->db->query($query);
            $schedule = $turbo->db->result();

            if (!$schedule) {
                $result = ['status' => 'error', 'message' => 'Schedule not found'];
            } elseif (!$schedule->source_active) {
                $result = ['status' => 'error', 'message' => 'Source is not active'];
            } else {
                // Log the manual run
                $turbo->parsing->createLog(
                    $schedule->parsing_source_id,
                    null,
                    'schedule_run',
                    "Manual run initiated for schedule: {$schedule->source_name} ({$schedule->cron_expression})"
                );

                // Set unlimited time limit for parsing
                set_time_limit(0);

                // Run parsing
                $parseStartTime = microtime(true);
                $parseResult = $turbo->parsing->parseSource($schedule->parsing_source_id);
                $parseEndTime = microtime(true);

                $duration = round($parseEndTime - $parseStartTime, 2);

                // Calculate next run time
                $nextRunAt = $turbo->parsing->getCronNextRun($schedule->cron_expression);

                // Update schedule with new run times
                $turbo->db->query(
                    "UPDATE __parsing_schedules SET last_run_at = NOW(), next_run_at = ? WHERE id = ?",
                    $nextRunAt,
                    (int) $scheduleId
                );

                // Log completion
                $turbo->parsing->createLog(
                    $schedule->parsing_source_id,
                    null,
                    'schedule_run_complete',
                    "Manual run completed: {$parseResult['parsed']} processed, {$parseResult['updated']} updated, {$parseResult['errors']} errors, duration: {$duration} sec"
                );

                $result = [
                    'status' => 'ok',
                    'message' => 'Парсинг запущен',
                    'parse_result' => [
                        'processed' => $parseResult['parsed'],
                        'updated' => $parseResult['updated'],
                        'errors' => $parseResult['errors'],
                        'duration' => $duration . ' sec'
                    ],
                    'next_run_at' => $nextRunAt
                ];
            }
        } catch (Exception $e) {
            // Log the error
            $turbo->parsing->createLog(
                null,
                null,
                'error',
                'Manual schedule run error: ' . $e->getMessage()
            );

            $result = ['status' => 'error', 'message' => 'Error running parsing: ' . $e->getMessage()];
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);