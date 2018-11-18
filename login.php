<?php

Session_start();
Session_destroy();

mysql_connect("localhost","root","") or die("no connection");
mysql_select_db("d3au1dsacafa29");
$query = "SELECT username, password FROM login WHERE username='".$_POST["user"]."'";
$results = mysql_query($query) or die(mysql_error());

$num = mysql_num_rows($results);
if ($num == 0)
    echo "Login information not found!";
else  {
    $row = mysql_fetch_array($results);
    if ($row["password"] == $_POST["pass"])
    {
    Session_start();
    $_SESSION["email"] = $_POST["user"];
    $_SESSION["d3au1dsacafa29"] = "OK";
        header("Location:about.html");       
    }
    else
        header("Location:login.html");

}

?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Alpha by HTML5 UP</title>
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
									<li><a href="login.html">Log In</a></li>
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
							<li><a href="purchase.html">Purchase</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>Log In</h2>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-12">
									<input type="password" name="password" id="password" value="" placeholder="Password" />
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Log In" /></li>
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

<?php
Session_start();
Session_destroy();
 echo "<script language='javascript'> window.top.location.href = 'login.html';                </script>";
?>