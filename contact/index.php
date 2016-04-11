<html>
<head>
	<?php include('../partials/head.php'); ?>
	<link href="../styles/contact.css" rel="stylesheet">
</head>
<body>
	<?php include('../partials/header.php'); ?>
	<h1 class="send-message-title">Send Message</h1>
	<div class="message-form-container">
		<form action="message.php" method="post" class="form-horizontal message-form">
			<div class="form-group">
				<label class="col-xs-3 control-label">Email</label>
				<div class="col-xs-9">
					<input type="text" name="email" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-3 control-label">Message</label>
				<div class="col-xs-9">
					<textarea type="text" name="message" class="form-control" rows="5"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12">
					<div class="pull-right">
						<button class="btn btn-primary" type="submit">Send</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="contact-info-container">
		<h2 class="contact-info-title">Contact Info</h2>
		<ul>
			<li>shayne.linhart (gmail)</li>
			<li><a href="https://www.linkedin.com/in/shaynelinhart" target="_new">linkedin.com/in/shaynelinhart</a></li>
			<li><a href="https://github.com/slinhart" target="_new">github.com/slinhart</a></li>
		</ul>
	</div>
	<?php include('../partials/primary_scripts.php'); ?>
</body>
</html>