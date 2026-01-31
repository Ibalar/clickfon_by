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
	$itemId = (int) $turbo->request->get('id', 'integer');

	if (empty($itemId)) {
		$result = ['status' => 'error', 'message' => 'Invalid item ID'];
	} else {
		$success = $turbo->parsing->deleteItem($itemId);

		if ($success) {
			$result = ['status' => 'ok', 'message' => 'Item deleted successfully'];
		} else {
			$result = ['status' => 'error', 'message' => 'Failed to delete item'];
		}
	}
}

header('Content-type: application/json; charset=UTF-8');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
header('Expires: -1');

echo json_encode($result);
