<?php

function response($data, $status = 'success', $code = 200, $message = '')
{
	header('Content-Type: application/json');
	http_response_code($code);
	$response = array(
		'status' => $status,
		'data' => $data,
		'message' => $message
	);
	echo json_encode($response);
	die();
}

?>