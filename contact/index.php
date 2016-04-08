<html>
<head>
	<?php include('../partials/head.php'); ?>
	<link href="../styles/contact.css" rel="stylesheet">
</head>
<body>
	<?php include('../partials/header.php'); ?>
	<h1 class="send-message-title">Send Message</h1>
	<form action="message.php" method="post">
		<input type="text" name="email" />
		<input type="text" name="message" />
		<button type="submit">Send</button>
	</form>
	<?php include('../partials/primary_scripts.php'); ?>
</body>
</html>