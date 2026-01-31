<?php

require_once 'api/Turbo.php';

class ParsingRunSourceAjax extends Turbo
{
    public function run()
    {
        header('Content-Type: application/json');

        // Получить ID источника из GET параметра
        $sourceId = $this->request->get('id', 'integer');

        // Валидация
        if (empty($sourceId)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Не указан ID источника'
            ]);
            return;
        }

        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Недостаточно прав доступа'
            ]);
            return;
        }

        // Проверить что источник существует
        $source = $this->parsing->getSource($sourceId);
        if (!$source) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Источник не найден'
            ]);
            return;
        }

        // Проверить что источник активен
        if (!$source->is_active) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Источник отключен'
            ]);
            return;
        }

        // Запустить парсинг
        try {
            // Увеличиваем лимит времени выполнения, так как парсинг может быть долгим
            set_time_limit(0);

            $result = $this->parsing->parseSource($sourceId);
            
            echo json_encode([
                'status' => 'ok',
                'message' => 'Парсинг завершен',
                'parsed' => $result['parsed'],
                'updated' => $result['updated'],
                'errors' => $result['errors']
            ]);
        } catch (Exception $e) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Ошибка при парсинге: ' . $e->getMessage()
            ]);
        }
    }
}

$ajax = new ParsingRunSourceAjax();
$ajax->run();
