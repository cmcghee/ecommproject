<?php
$action = '';
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/login.css" />
	</head>
	<body class="is-preload">

		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html"></a><span class="image featured"><img src="images/logo.png" width="50%" /></span>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Menu</a>
								<ul>
									<li><a href="signup.php">Sign Up</a></li>
									<li><a href="login.php">Log In</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="contact.php">Contact</a></li>
									<!-- <li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li> -->
								</ul>
							<li><a href="product_description.html">Product Description</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Log In</h2>
					</header>
					<div class="box">
						<form method="GET" action="send.php">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="email" name="email" id="email" value="" placeholder="Email" required />
								</div>
								<div class="col-12">
									<input type="password" name="password" id="password" value="" placeholder="Password" required />
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Log In"/></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>