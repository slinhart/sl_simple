<?php
	require_once 'config.php';
	require_once 'response.php';

	class Auth
	{
		// Singleton class
		private static $instance = null;

		// Prevent instances from being created
		private function __construct() {}
		private function __clone() {}

		public static function create()
		{
			if(!isset(static::$instance)) {
				static::$instance = new static;
			}
			return static::$instance;
		}

		public static function isAuth()
		{
			return isset($_SESSION['username']);
		}

		public static function login($username, $password)
		{
			$qry = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
			$result = mysqli_query($GLOBALS['db'], $qry);

			// User with password found
			if($result && mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_array($result);
				$_SESSION['username'] = $username;
				return true;
			} else {
				return false;
			}
		}
	}
?>