<html>
<?php include('partials/head.php'); ?>
<body>
	<header class="send-message-header">
		<h1>Send Message</h1>
	</header>
	<form action="message.php" method="post">
		<input type="text" name="email" />
		<input type="text" name="message" />
		<button type="submit">Send</button>
	</form>
</body>
</html>