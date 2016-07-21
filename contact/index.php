<html>
<head>
	<?php include('../partials/head.php'); ?>
	<link href="../styles/contact.css" rel="stylesheet">
	<title>Contact Shayne Linhart</title>
	<meta name="description" content="Shayne Linhart is a Web Developer in Colorado. Contact him with professional opportunities, or open source propositions.">
</head>
<body>
	<?php include('../partials/header.php'); ?>
	<div class="content-container">
		<div class="centered-content">
			<h1 class="send-message-title">Send Message</h1>
			<form method="post" class="form-horizontal message-form">
				<div class="form-group">
					<label class="col-xs-3 col-sm-2 col-xs-offset-1 control-label">Email</label>
					<div class="col-xs-8 col-sm-9">
						<input type="text" name="email" class="email-input form-control" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-3 col-sm-2 col-xs-offset-1 control-label">Message</label>
					<div class="col-xs-8 col-sm-9">
						<textarea type="text" name="message" class="message-input form-control" rows="5"></textarea>
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
	</div>
	<div id="hr-container">
			<div class="hr-center">
					<hr class="marginless-hr" />
			</div>
		</div>
	<div class="content-container">
		<div class="centered-content contact-info-container">
			<h2 class="contact-info-title">Contact Info</h2>
			<ul class="contact-info-list">
				<li><span class="contact-item">shayne.linhart (gmail)</span></li>
				<li><a class="contact-item" href="https://www.linkedin.com/in/shaynelinhart" target="_new">linkedin.com/in/shaynelinhart</a></li>
				<li><a class="contact-item" href="https://github.com/slinhart" target="_new">github.com/slinhart</a></li>
			</ul>
		</div>
	</div>
	<?php include('../partials/primary_scripts.php'); ?>
	<script src="../js/contact.js"></script>
</body>
</html>