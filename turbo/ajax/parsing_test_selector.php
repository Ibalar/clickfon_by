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
        $priceResult = $turbo->parsing->testSelector($url, $selectorPrice);

        if ($priceResult['status'] !== 'success') {
            $result = [
                'status' => 'error',
                'message' => $priceResult['message'] === 'Selector not found' ? 'Selector not found on page' : $priceResult['message'],
                'price' => null,
                'article' => null
            ];
        } else {
            $articleResult = $turbo->parsing->testSelector($url, $selectorArticle);

            if ($articleResult['status'] !== 'success') {
                $result = [
                    'status' => 'error',
                    'message' => $articleResult['message'] === 'Selector not found' ? 'Selector not found on page' : $articleResult['message'],
                    'price' => $priceResult['value'],
                    'article' => null
                ];
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
            }
        }
    }
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);
