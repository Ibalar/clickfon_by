<?php

require_once 'api/Turbo.php';

class ParsingSchedulesAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        // Обработка AJAX действий
        $action = $this->request->get('action', 'string');
        if ($action) {
            $this->handleAction($action);
            return;
        }

        $page = max(1, (int)$this->request->get('page', 'integer', 1));
        $limit = 20;
        $offset = ($page - 1) * $limit;

        // Получение расписаний с пагинацией
        $schedules = $this->parsing->getSchedules(['limit' => $limit, 'offset' => $offset]);
        
        // Получаем источники для каждого расписания
        foreach ($schedules as $schedule) {
            $source = $this->parsing->getSource($schedule->parsing_source_id);
            $schedule->source_name = $source ? $source->name : 'Источник не найден';
        }

        // Общее количество для пагинации
        $allSchedules = $this->parsing->getSchedules([]);
        $totalCount = count($allSchedules);
        $totalPages = ceil($totalCount / $limit);

        // Присваивание данных в шаблон
        $this->design->assign('schedules', $schedules);
        $this->design->assign('page', $page);
        $this->design->assign('total_count', $totalCount);
        $this->design->assign('total_pages', $totalPages);
        $this->design->assign('limit', $limit);

        return $this->design->fetch('parsing_schedules.tpl');
    }

    private function handleAction($action)
    {
        header('Content-Type: application/json');
        
        switch ($action) {
            case 'getSources':
                $this->getSources();
                break;
            case 'getScheduleData':
                $this->getScheduleData();
                break;
            case 'saveSchedule':
                $this->saveSchedule();
                break;
            case 'deleteSchedule':
                $this->deleteSchedule();
                break;
            case 'runScheduleNow':
                $this->runScheduleNow();
                break;
            default:
                echo json_encode(['status' => 'error', 'message' => 'Unknown action']);
        }
    }

    private function getSources()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Недостаточно прав доступа']);
            return;
        }

        $sources = $this->parsing->getSources([]);
        echo json_encode(['status' => 'ok', 'sources' => $sources]);
    }

    private function getScheduleData()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Недостаточно прав доступа']);
            return;
        }

        $scheduleId = $this->request->post('schedule_id', 'integer');
        
        if (empty($scheduleId)) {
            echo json_encode(['status' => 'error', 'message' => 'ID расписания не указан']);
            return;
        }

        $schedules = $this->parsing->getSchedules([]);
        $schedule = null;
        
        foreach ($schedules as $s) {
            if ($s->id == $scheduleId) {
                $schedule = $s;
                break;
            }
        }

        if (!$schedule) {
            echo json_encode(['status' => 'error', 'message' => 'Расписание не найдено']);
            return;
        }

        echo json_encode(['status' => 'ok', 'schedule' => $schedule]);
    }

    private function saveSchedule()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Недостаточно прав доступа']);
            return;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        
        $sourceId = isset($input['source_id']) ? (int)$input['source_id'] : 0;
        $cronExpression = isset($input['cron_expression']) ? trim($input['cron_expression']) : '';
        $isActive = isset($input['is_active']) ? (int)$input['is_active'] : 1;

        // Валидация
        if (empty($sourceId)) {
            echo json_encode(['status' => 'error', 'message' => 'Выберите источник парсинга']);
            return;
        }

        if (empty($cronExpression)) {
            echo json_encode(['status' => 'error', 'message' => 'Укажите cron-выражение']);
            return;
        }

        // Проверить что источник существует
        $source = $this->parsing->getSource($sourceId);
        if (!$source) {
            echo json_encode(['status' => 'error', 'message' => 'Источник не найден']);
            return;
        }

        // Валидация cron выражения
        if (!$this->parsing->validateCronExpression($cronExpression)) {
            echo json_encode(['status' => 'error', 'message' => 'Неверный формат cron-выражения']);
            return;
        }

        try {
            // Рассчитать следующее время запуска
            $nextRunAt = $this->parsing->getCronNextRun($cronExpression);
            
            // Проверить существует ли уже расписание для этого источника
            $existingSchedule = $this->parsing->getSchedule($sourceId);
            
            if ($existingSchedule) {
                // Обновить существующее расписание
                $query = $this->db->placehold(
                    "UPDATE __parsing_schedules SET cron_expression = ?, is_active = ?, next_run_at = ? WHERE parsing_source_id = ?",
                    $cronExpression,
                    $isActive,
                    $nextRunAt,
                    $sourceId
                );
                $this->db->query($query);
                
                $this->parsing->createLog($sourceId, null, 'schedule_updated', "Schedule updated: $cronExpression");
            } else {
                // Создать новое расписание
                $query = $this->db->placehold(
                    "INSERT INTO __parsing_schedules (parsing_source_id, cron_expression, is_active, next_run_at) VALUES (?, ?, ?, ?)",
                    $sourceId,
                    $cronExpression,
                    $isActive,
                    $nextRunAt
                );
                $this->db->query($query);
                
                $this->parsing->createLog($sourceId, null, 'schedule_created', "Schedule created: $cronExpression");
            }

            echo json_encode([
                'status' => 'ok', 
                'message' => 'Расписание сохранено',
                'next_run_at' => $nextRunAt
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Ошибка сохранения: ' . $e->getMessage()]);
        }
    }

    private function deleteSchedule()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Недостаточно прав доступа']);
            return;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        $scheduleId = isset($input['schedule_id']) ? (int)$input['schedule_id'] : 0;

        if (empty($scheduleId)) {
            echo json_encode(['status' => 'error', 'message' => 'ID расписания не указан']);
            return;
        }

        try {
            $query = $this->db->placehold("DELETE FROM __parsing_schedules WHERE id = ? LIMIT 1", $scheduleId);
            $this->db->query($query);
            
            if ($this->db->affectedRows() > 0) {
                $this->parsing->createLog(null, null, 'schedule_deleted', "Schedule $scheduleId deleted");
                echo json_encode(['status' => 'ok', 'message' => 'Расписание удалено']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Расписание не найдено']);
            }
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Ошибка удаления: ' . $e->getMessage()]);
        }
    }

    private function runScheduleNow()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode(['status' => 'error', 'message' => 'Недостаточно прав доступа']);
            return;
        }

        $input = json_decode(file_get_contents('php://input'), true);
        $scheduleId = isset($input['schedule_id']) ? (int)$input['schedule_id'] : 0;

        if (empty($scheduleId)) {
            echo json_encode(['status' => 'error', 'message' => 'ID расписания не указан']);
            return;
        }

        try {
            // Получить расписание
            $schedules = $this->parsing->getSchedules([]);
            $schedule = null;
            
            foreach ($schedules as $s) {
                if ($s->id == $scheduleId) {
                    $schedule = $s;
                    break;
                }
            }

            if (!$schedule) {
                echo json_encode(['status' => 'error', 'message' => 'Расписание не найдено']);
                return;
            }

            // Запустить парсинг
            $parseResult = $this->parsing->parseSource($schedule->parsing_source_id);
            
            // Обновить время последнего запуска
            $this->db->query(
                "UPDATE __parsing_schedules SET last_run_at = NOW() WHERE id = ?",
                $scheduleId
            );

            $this->parsing->createLog(
                $schedule->parsing_source_id, 
                null, 
                'schedule_manual_run', 
                "Manual schedule run completed"
            );

            echo json_encode([
                'status' => 'ok',
                'message' => 'Парсинг выполнен',
                'parse_result' => $parseResult
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Ошибка выполнения: ' . $e->getMessage()]);
        }
    }
}