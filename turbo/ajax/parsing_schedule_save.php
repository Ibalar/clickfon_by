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
    // Get POST parameters
    $sourceId = (int) $turbo->request->post('source_id', 'integer');
    $cronExpression = $turbo->request->post('cron_expression', 'string');
    $isActive = (int) $turbo->request->post('is_active', 'integer');

    // Validation
    if (empty($sourceId)) {
        $result = ['status' => 'error', 'message' => 'Source ID is required'];
    } elseif (empty($cronExpression)) {
        $result = ['status' => 'error', 'message' => 'Cron expression is required'];
    } elseif (!in_array($isActive, [0, 1])) {
        $result = ['status' => 'error', 'message' => 'Invalid is_active value'];
    } else {
        // Validate source exists and is active
        $source = $turbo->parsing->getSource($sourceId);
        if (!$source) {
            $result = ['status' => 'error', 'message' => 'Source not found'];
        } elseif (!$source->is_active) {
            $result = ['status' => 'error', 'message' => 'Source is not active'];
        } elseif (!$turbo->parsing->validateCronExpression($cronExpression)) {
            $result = ['status' => 'error', 'message' => 'Invalid cron expression'];
        } else {
            try {
                // Check if schedule exists
                $existingSchedule = $turbo->parsing->getSchedule($sourceId);
                $isUpdate = $existingSchedule !== false;
                
                // Save/update schedule using API method
                $success = $turbo->parsing->createOrUpdateSchedule($sourceId, $cronExpression);
                
                if ($success) {
                    // Get the schedule to get ID and next run time
                    $schedule = $turbo->parsing->getSchedule($sourceId);
                    
                    // Update is_active status if needed
                    if ($schedule && $schedule->is_active != $isActive) {
                        $turbo->db->query(
                            "UPDATE __parsing_schedules SET is_active = ? WHERE id = ?",
                            $isActive,
                            (int) $schedule->id
                        );
                    }
                    
                    // Get next run time
                    $nextRunAt = $turbo->parsing->getCronNextRun($cronExpression);
                    
                    $result = [
                        'status' => 'ok',
                        'message' => $isUpdate ? 'Расписание обновлено успешно' : 'Расписание создано успешно',
                        'schedule_id' => $schedule->id,
                        'next_run_at' => $nextRunAt
                    ];
                } else {
                    $result = ['status' => 'error', 'message' => 'Failed to save schedule'];
                }
            } catch (Exception $e) {
                $result = ['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()];
            }
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);