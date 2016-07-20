<html>
<head>
	<?php include('partials/head.php'); ?>
</head>
<body>
	<div class="home-page">
	<?php include('partials/header.php'); ?>
		<div class="role-title-container">
			<h2 class="role-title">Software Developer</h2>
		</div>
		<div id="hr-container">
			<div class="hr-center">
					<hr />
			</div>
		</div>
		<div class="about-me-section-intro-container centered-content">
			<section class="about-me-intro-section">
				<p class="about-me-intro">
					Developing software is my passion and my job. I spend most of my time working with JavaScript and other web technologies. I built this site as an outlet for me to share my ideas, and to connect with other developers and the open source community.
				</p>
			</section>
		</div>
		<section class="blog-articles-section">
			<div class="content-container">
				<div class="centered-content">
					<div class="blog-articles-title-container">
						<h2 class="blog-articles-title">Blog Articles</h2>
						<i class="fa fa-feed blog-icon"></i>
					</div>
					<a href="/blog">
						<div class="articles-container">
							<h3 class="article-title">Fix JavaScript bugs faster with DevTools</h3>
							<time class="article-date">July 18, 2016</time>
							<p class="preview-blog-text">
								There is already quite a lot of content out there that glosses over the features of the Chrome Devtools, and the official documentation is really great. But in this article I’m going to focus on some specific features that I find particularly helpful, and often underused, when debugging JavaScript problems. If you are a developer who regularly works with JavaScript in the browser, and your go-to strategy for solving bugs is to spread console.logs() throughout your code — this article is for you.
							</p>
						</div>
					</a>
				</div>
			</div>
		</section>
	</div>

	<!-- <div class="scroll-top-btn-container">
		<a class="btn scroll-top-btn"><span><i class="fa fa-angle-up"></i></span></a>
	</div> -->

	<?php include('partials/primary_scripts.php'); ?>
</body>
</html>