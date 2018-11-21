<?php
//session_start();

if (session_status() != PHP_SESSION_ACTIVE) {
	echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/memberhome.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<a href="index.php"></a><span class="image featured"><img src="images/logo.png" width="50%" /></span>
					<nav id="nav">
						<ul>
							<li><a href="memberpage.php">Home</a></li>
							<!-- keep this home button -->
							<li>
								<a href="#" class="icon fa-angle-down">Options</a>
								<ul>
									<!-- we want to keep about and contact -->
									<li><a href="userinfo.php">View Profile</a></li>
									<li><a href="memberabout.php">About Us</a></li>
									<li><a href="membercontact.php">Contact</a></li>
									<!--view profile in this dropdown-->
								</ul>
							<li><a href="purchase.php">Purchase</a></li>
							<li><a href="index.php">Logout</a></li>
							<!-- remove the purchase link from the top right - we now have this front and center-->
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<div id="mask">
				<section id="banner">
					<h2>Welcome to GlideTech</h2>
				</section>
				</div>

			<!-- Main -->
				<section id="main" class="container">
					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Sleek</h3>
								<p>Engineered specifically to accomodate the curves and lines of the human body.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Efficient</h3>
								<p>Runs at peak performance on a single battery charge for over two weeks.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Clean</h3>
								<p>Batteries are created and run with new technologies that optimally facilitate the on-and-off life of the chair, 
								and work to decrease our carbon footprint.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>User Friendly</h3>
								<p>Chairs are set into action at the mere snap of your fingers.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/chair.jpg" alt="" /></span>
								<h3>Cutting Edge Technology</h3>
								<p>The tech used within the GlideTech chairs is one of a kind, we are the first company to market a product of this nature. The chairs will soon be available for consumer purchase</p>
								
							</section>

						</div>
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/intelchair.jpg" alt="" /></span>
								<h3>Powered by Nissan</h3>
								<p>With backing from Nissan, GlideTech is able to mass produce these chairs. Nissan's funding and technology has allowed us to create a state of the art product</p>
								
							</section>

						</div>
					</div>

				</section>

			<!-- Footer -->
				<!-- <footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer> -->

		</div>

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