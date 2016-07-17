<html>
<head>
	<?php include('../partials/head.php'); ?>
	<link href="../styles/blog.css" rel="stylesheet">
</head>
<body>
	<?php include('../partials/header.php'); ?>

	<section class="blog-articles-section">
		<div class="content-container">
			<div class="centered-content">
				<div class="articles-container">
					<h1>Fix JavaScript Bugs Faster with DevTools</h1>
					<p>
						There is already quite a lot of content out there that glosses over the features of the Chrome Devtools, and the <a href="https://developers.google.com/web/tools/chrome-devtools/">official documentation</a> is really great. But in this article I’m going to focus on some specific features that I find particularly helpful, and often underused, when debugging tricky JavaScript problems. If you are a developer who regularly works with JavaScript in the browser, and your go-to strategy for solving bugs is to spread console.logs() throughout your code &#8212 this article is for you.
					</p>
					<h2>Who is Calling this Code?</h2>
					<p>
						One of the most common questions a developer might ask themselves when debugging a section of code is “who is calling this code”, or “what are the series of events that led to this code getting executed”. The answer lies in the <strong>call stack</strong>.
					</p>
					<p>
						To access the call stack from the DevTools, you need to be viewing the <strong>sources</strong> tab. Your code also needs to be paused in its execution, which can be achieved through <strong>breakpoints</strong>. If you are not sure what breakpoints are or how to set them, don’t worry as they will be covered in more detail later in this article. For now I will assume that you have your breakpoint set and your code is paused in execution at the location where you are interested in the call stack. Below is an example of what a call stack might look like.
					</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/callstack-screenshot.png" alt="screenshot of call stack"></img>
					</div>
					<p>
						From here you can gather various kinds of information about the state of your program. Immediately you can notice all the functions on the call stack and their associated file and line number (in my case they are all in the same file). You can also click on any of the functions in the call stack to inspect the values of all the variables in scope. You can view the variables either through the scope panel
					</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/scopepanel-screenshot.png" alt="screenshot of scope panel"></img>
					</div>
					<p>with the console,</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/consolevariable.png" alt="screenshot of scope panel"></img>
					</div>
					<p>or by hovering over the variables in the source with your mouse.</p>
					<img class="blog-img" src="../img/blog/devtools/sourcevariable.png" alt=""></img>

					<h2>What is the Control Flow of the Code?</h2>
					<p>
						In addition to knowing the functions on the call stack, you may also be interested in the control flow within a function (i.e. a loop, switch, etc.). This can also be accomplished with the use of a breakpoint.
					</p>
					<p>
						Breakpoints can be set in two ways: either by adding the <strong>debugger</strong> keyword as a statement directly into your source code,
					</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/debugger-sourcecode.png" alt="screenshot of debugger in source code"></img>
					</div>
					<p>or by setting a debugger in the gutter of the source tab.</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/gutter.png" alt="screenshot of gutter breakpoint being used"></img>
					</div>
					<p>
						You set the debugger in the gutter by simply clicking the line number where you want to set the breakpoint. (Note: you can set as many breakpoints as you’d like). Once you are stopped at a breakpoint, you can navigate in several ways, check out the actions in the <a href="https://developers.google.com/web/tools/chrome-devtools/debug/breakpoints/step-code?hl=en#stepping-in-action">docs</a>. I highly recommend getting used to using the hotkeys for each of these actions, as it will make your debugging workflow much faster. While stepping through the code, you can inspect the variables in scope the same way as previously mentioned.
					</p>
					<h3>I'm trying to step through my code, but I'm not interested in stepping through jQuery's Source.</h3>
					<p>
						Oftentimes when you are stepping through your code, functions from your libraries and frameworks will be called. There definitely are cases where you want to step through the libraries code to see the values in order to discover clues about your bug, however, most of the time you won’t be interested in stepping through any 3rd part code. Luckily, DevTools provides a feature that allows you to skip over, or ignore any code marked as a <strong>Blackbox script</strong>.
					</p>
					<div class="img-wrapper">
						<img class="blog-img" src="../img/blog/devtools/blackboxscript.png" alt=""></img>
					</div>

					<h2>I want to debug a section of code, but it gets called a lot.</h2>
					<p>
						Sometimes you will run into situations where you want to add a breakpoint to a function that gets called very often. For example, this could happen when you want to debug a function that happens to get called before every request (such as adding a token to the query parameters). When you are debugging these functions, you might only be interested in pausing the execution during specific situations (perhaps only before a particular request). There are two strategies you can use in this situation: a conditional breakpoint (see <a href="https://developers.google.com/web/tools/chrome-devtools/debug/breakpoints/add-breakpoints?hl=en#create-conditional-breakpoints">docs</a> for how to use) or by deactivating and reactivating breakpoints in the DevTools.
					</p>

				</div>
			</div>
		</div>
	</section>

	<?php include('../partials/primary_scripts.php'); ?>
</body>
</html>