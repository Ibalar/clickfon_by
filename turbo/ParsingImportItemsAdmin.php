<?php

require_once 'api/Turbo.php';

class ParsingImportItemsAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        // Получить source_id из параметров
        $sourceId = $this->request->get('source_id', 'integer');
        if (empty($sourceId)) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Получить source и убедиться что он существует
        $source = $this->parsing->getSource($sourceId);
        if (empty($source)) {
            $this->design->assign('message_error', 'source_not_found');
            return $this->design->fetch('error.tpl');
        }

        // Передать source в Smarty
        $this->design->assign('source', $source);

        // Если метод POST - обработать импорт файла
        if ($this->request->method('post')) {
            $result = $this->processImport($sourceId);

            if ($result['success']) {
                $this->design->assign('import_result', $result['data']);
                $this->design->assign('message_success', 'import_completed');
            } else {
                $this->design->assign('message_error', $result['error']);
            }
        }

        // Вернуть шаблон parsing_import_items.tpl
        return $this->design->fetch('parsing_import_items.tpl');
    }

    /**
     * Process import from uploaded file or text
     */
    private function processImport($sourceId)
    {
        $result = [
            'success' => false,
            'error' => null,
            'data' => null
        ];

        // Получить режим импорта
        $mode = $this->request->post('mode', 'string', 'create_or_update');
        $allowedModes = ['create', 'update', 'create_or_update'];

        if (!in_array($mode, $allowedModes)) {
            $mode = 'create_or_update';
        }

        $filePath = null;
        $isTempFile = false;

        // Способ 1: Загрузка файла
        $uploadedFile = $this->request->files('file');
        if (!empty($uploadedFile) && $uploadedFile['error'] == UPLOAD_ERR_OK) {
            // Проверить расширение файла
            $fileName = $uploadedFile['name'];
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (!in_array($extension, ['csv', 'txt'])) {
                $result['error'] = 'invalid_file_extension';
                return $result;
            }

            // Проверить размер файла (максимум 10MB)
            if ($uploadedFile['size'] > 10 * 1024 * 1024) {
                $result['error'] = 'file_too_large';
                return $result;
            }

            // Создать временный файл
            $filePath = tempnam(sys_get_temp_dir(), 'parsing_import_');
            $isTempFile = true;

            if (!move_uploaded_file($uploadedFile['tmp_name'], $filePath)) {
                $result['error'] = 'upload_error';
                return $result;
            }
        }
        // Способ 2: Текст из поля
        else {
            $textData = $this->request->post('text_data', 'string');

            if (empty($textData)) {
                $result['error'] = 'no_data_provided';
                return $result;
            }

            // Создать временный файл из текстовых данных
            $filePath = tempnam(sys_get_temp_dir(), 'parsing_import_');
            $isTempFile = true;

            if (file_put_contents($filePath, $textData) === false) {
                $result['error'] = 'file_create_error';
                return $result;
            }
        }

        // Вызвать метод импорта
        $importResult = $this->parsing->importUrls($sourceId, $filePath, $mode);

        // Удалить временный файл
        if ($isTempFile && file_exists($filePath)) {
            @unlink($filePath);
        }

        $result['success'] = true;
        $result['data'] = $importResult;

        return $result;
    }
}
