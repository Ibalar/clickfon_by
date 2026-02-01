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
    $url = $turbo->request->post('url', 'string');
    $selectorPrice = $turbo->request->post('selector_price', 'string');
    $selectorArticle = $turbo->request->post('selector_article', 'string');

    if (empty($url) || empty($selectorPrice) || empty($selectorArticle)) {
        $result = ['status' => 'error', 'message' => 'Missing required parameters'];
    } else {
        // Validate selectors format first
        $priceValidation = $turbo->parsing->validateSelectorPublic($selectorPrice);
        $articleValidation = $turbo->parsing->validateSelectorPublic($selectorArticle);

        // Add selector validation feedback
        $validationFeedback = [];

        if (!$priceValidation['valid']) {
            $validationFeedback['price_selector'] = $priceValidation;
        }

        if (!$articleValidation['valid']) {
            $validationFeedback['article_selector'] = $articleValidation;
        }

        $priceResult = $turbo->parsing->testSelector($url, $selectorPrice);

        // Add validation feedback to result
        if (!empty($validationFeedback)) {
            $priceResult['selector_validation'] = $validationFeedback;
        }

        if ($priceResult['status'] !== 'success') {
            $result = [
                'status' => 'error',
                'message' => $priceResult['message'] === 'Selector not found' ? 'Selector not found on page' : $priceResult['message'],
                'price' => null,
                'article' => null
            ];

            // Add validation warnings even if selector not found
            if (!empty($validationFeedback)) {
                $result['selector_validation'] = $validationFeedback;
            }
        } else {
            $articleResult = $turbo->parsing->testSelector($url, $selectorArticle);

            // Add validation feedback to article result
            if (!empty($validationFeedback)) {
                $articleResult['selector_validation'] = $validationFeedback;
            }

            if ($articleResult['status'] !== 'success') {
                $result = [
                    'status' => 'error',
                    'message' => $articleResult['message'] === 'Selector not found' ? 'Selector not found on page' : $articleResult['message'],
                    'price' => $priceResult['value'],
                    'article' => null
                ];

                // Add validation warnings even if selector not found
                if (!empty($validationFeedback)) {
                    $result['selector_validation'] = $validationFeedback;
                }
            } else {
                $priceValue = $priceResult['value'];
                $articleValue = $articleResult['value'];

                if ($priceValue === null || $articleValue === null) {
                    $result = [
                        'status' => 'error',
                        'message' => 'Selector not found on page',
                        'price' => $priceValue,
                        'article' => $articleValue
                    ];
                } else {
                    $result = [
                        'status' => 'ok',
                        'price' => $priceValue,
                        'article' => $articleValue,
                        'message' => 'Selectors found values successfully'
                    ];
                }

                // Add validation warnings to successful result too
                if (!empty($validationFeedback)) {
                    $result['selector_validation'] = $validationFeedback;
                    $result['message'] .= ' (with selector format warnings)';
                }
            }
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);
