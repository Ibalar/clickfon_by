<?php

require_once 'api/Turbo.php';

class ParsingSourceAdmin extends Turbo
{
    public function fetch()
    {
        // Проверка прав доступа
        if (!$this->managers->access('parsing')) {
            $this->design->assign('message_error', 'permission_denied');
            return $this->design->fetch('error.tpl');
        }

        // Инициализация переменных
        $source = null;
        $action = $this->request->get('action', 'string');
        $sourceId = $this->request->get('id', 'integer');

        // Если это редактирование - загрузить источник
        if ($action === 'edit' && !empty($sourceId)) {
            $source = $this->parsing->getSource($sourceId);
            if (!$source) {
                $this->design->assign('message_error', 'not_found');
                return $this->design->fetch('error.tpl');
            }
        }

        // Обработка POST запроса (сохранение)
        if ($this->request->method('post')) {
            $result = $this->saveSource($source);
            
            if ($result['success']) {
                $this->design->assign('message_success', $result['message']);
                // Перейти на список
                echo '<script>setTimeout(function() { window.location = "?module=ParsingSourcesAdmin"; }, 1500);</script>';
                return;
            } else {
                $this->design->assign('message_error', $result['message']);
                $source = (object) $result['data'];
            }
        }

        // Передать в Smarty
        $this->design->assign('source', $source);
        $this->design->assign('action', $action);

        // Вернуть шаблон
        return $this->design->fetch('parsing_source.tpl');
    }

    private function saveSource($source)
    {
        // ОТЛАДКА: проверка POST-данных
        error_log('POST data: ' . print_r($_POST, true));

        $data = [
            'name' => $this->request->post('name'),
            'base_url' => $this->request->post('base_url'),
            'selector_price' => $this->request->post('selector_price'),
            'selector_article' => $this->request->post('selector_article'),
            'price_min_bound' => $this->request->post('price_min_bound') ? (float)$this->request->post('price_min_bound') : null,
            'price_max_bound' => $this->request->post('price_max_bound') ? (float)$this->request->post('price_max_bound') : null,
            'is_active' => $this->request->post('is_active') ? 1 : 0
        ];

        // ОТЛАДКА: проверка распарсенных данных
        error_log('Parsed data: ' . print_r($data, true));

        // Валидация
        $errors = $this->validateSourceData($data);

        // ОТЛАДКА: проверка ошибок валидации
        error_log('Validation errors: ' . print_r($errors, true));
        if (!empty($errors)) {
            return [
                'success' => false,
                'message' => implode(', ', $errors),
                'data' => $data
            ];
        }

        // Сохранить
        $sourceId = $this->request->get('id', 'integer');

        if (!empty($sourceId)) {
            // Обновление
            $updateResult = $this->parsing->updateSource($sourceId, $data);
            if ($updateResult === true) {
                return [
                    'success' => true,
                    'message' => 'Источник обновлен успешно'
                ];
            } elseif (is_array($updateResult) && isset($updateResult['error'])) {
                // Validation error with details
                $errorMessage = $updateResult['error'];
                if (isset($updateResult['details']['message'])) {
                    $errorMessage .= ': ' . $updateResult['details']['message'];
                }
                return [
                    'success' => false,
                    'message' => $errorMessage,
                    'data' => $data
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Ошибка при обновлении источника',
                    'data' => $data
                ];
            }
        } else {
            // Создание
            $newId = $this->parsing->createSource($data);
            if ($newId && !is_array($newId)) {
                return [
                    'success' => true,
                    'message' => 'Источник создан успешно'
                ];
            } elseif (is_array($newId) && isset($newId['error'])) {
                // Validation error with details
                $errorMessage = $newId['error'];
                if (isset($newId['details']['message'])) {
                    $errorMessage .= ': ' . $newId['details']['message'];
                }
                return [
                    'success' => false,
                    'message' => $errorMessage,
                    'data' => $data
                ];
            } else {
                return [
                    'success' => false,
                    'message' => 'Ошибка при создании источника',
                    'data' => $data
                ];
            }
        }
    }

    private function validateSourceData($data)
    {
        $errors = [];

        // Название обязательно
        if (empty($data['name'])) {
            $errors[] = 'Название источника обязательно';
        }

        // URL обязательно
        if (empty($data['base_url'])) {
            $errors[] = 'URL источника обязателен';
        } elseif (!filter_var($data['base_url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'URL некорректный';
        }

        // Селекторы обязательны
        if (empty($data['selector_price'])) {
            $errors[] = 'Селектор цены обязателен';
        } else {
            // Validate price selector format
            $priceValidation = $this->parsing->validateSelectorPublic($data['selector_price']);
            if (!$priceValidation['valid']) {
                $errors[] = 'Селектор цены: ' . $priceValidation['message'];
            }
        }

        if (empty($data['selector_article'])) {
            $errors[] = 'Селектор артикула обязателен';
        } else {
            // Validate article selector format
            $articleValidation = $this->parsing->validateSelectorPublic($data['selector_article']);
            if (!$articleValidation['valid']) {
                $errors[] = 'Селектор артикула: ' . $articleValidation['message'];
            }
        }

        // Границы цены - проверка на корректность
        if (!empty($data['price_min_bound']) && $data['price_min_bound'] < 0) {
            $errors[] = 'Минимальная граница цены не может быть отрицательной';
        }

        if (!empty($data['price_max_bound']) && $data['price_max_bound'] < 0) {
            $errors[] = 'Максимальная граница цены не может быть отрицательной';
        }

        if (!empty($data['price_min_bound']) && !empty($data['price_max_bound'])
            && $data['price_min_bound'] > $data['price_max_bound']) {
            $errors[] = 'Минимальная граница не может быть больше максимальной';
        }

        return $errors;
    }
}
