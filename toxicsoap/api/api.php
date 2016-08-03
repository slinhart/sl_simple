<?php
	require_once 'config.php';
	require_once 'response.php';

	session_start();

	$uri = $_SERVER['REQUEST_URI'];
	$pathArr = explode('/', $uri);
	$requestIndex = array_search('api.php', $pathArr) + 1;
	$request = $pathArr[$requestIndex];


	if($request === 'login') {
		require_once 'auth.php';
		$auth = Auth::create();

		if($auth::isAuth()) {
			response(null, 'success', 200, 'Already logged in.');
		}

		$username = mysqli_real_escape_string($GLOBALS['db'], $_POST['username']);
		$password = mysqli_real_escape_string($GLOBALS['db'], $_POST['password']);

		$loginSuccess = auth::login($username, $password);
		if($loginSuccess) {
			response(null);
		} else {
			response(null, 'error', 401, 'Failed login');
		}

	} else {
		response(null, 'error', 400, 'Unrecognized Request');
	}
?>