<html>
<head>
	<?php include('../partials/head.php'); ?>
	<link href="styles/app.css" rel="stylesheet">
	<title>Toxic Soap - Guild Managment</title>
	<meta name="description" content="Web app for helping organize WoW raids for Toxic Soap.">
</head>
<body>
	<?php include('../partials/header.php'); ?>

	<div id="app-container" ng-app="app">
		<div ng-view></div>
	</div>

	<?php include('../partials/primary_scripts.php'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>

	<script src="app/app.js"></script>
	<script src="app/login/loginController.js"></script>
	<script src="app/login/registerController.js"></script>
	<script src="app/dashboard/dashboardController.js"></script>
</body>
</html>