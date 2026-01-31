<?php

require_once 'api/Turbo.php';

class ParsingDeleteSourceAjax extends Turbo
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

        // Удалить источник
        if ($this->parsing->deleteSource($sourceId)) {
            echo json_encode([
                'status' => 'ok',
                'message' => 'Источник удален успешно'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Ошибка при удалении источника'
            ]);
        }
    }
}

$ajax = new ParsingDeleteSourceAjax();
$ajax->run();
?>
