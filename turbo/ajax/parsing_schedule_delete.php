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
            // Get schedule details before deletion for logging
            $query = $turbo->db->placehold(
                "SELECT ps.id, ps.parsing_source_id, ps.cron_expression, s.name as source_name
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
            } else {
                // Delete the schedule
                $query = $turbo->db->placehold("DELETE FROM __parsing_schedules WHERE id = ? LIMIT 1", (int) $scheduleId);
                $turbo->db->query($query);

                if ($turbo->db->affectedRows() > 0) {
                    // Log the deletion
                    $turbo->parsing->createLog(
                        $schedule->parsing_source_id,
                        null,
                        'schedule_deleted',
                        "Schedule deleted: {$schedule->source_name} ({$schedule->cron_expression})"
                    );

                    $result = [
                        'status' => 'ok',
                        'message' => 'Расписание удалено'
                    ];
                } else {
                    $result = ['status' => 'error', 'message' => 'Failed to delete schedule'];
                }
            }
        } catch (Exception $e) {
            $result = ['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()];
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);