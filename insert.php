<?php
   	$dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

   	$hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$query = "INSERT INTO siteusers (email, password, name, state, address, zipcode, city) VALUES ('$_POST[email]', $hashedpassword, '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";

	pg_query($dbconn,$query);
	if (pg_query($dbconn,$query))  {
        $text = "Success";
    }
    else  {
        $text = "Failed, email in use";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $text?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/signup.css" />
</head>
<body>
	<!-- Header -->
		<header id="header" class="alt">
			<a href="index.html"></a><span class="image featured"><img src="images/logo.png" width="40%" /></span>
			<nav id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li>
						<a href="#" class="icon fa-angle-down">Menu</a>
						<ul>
							<li><a href="signup.php">Sign Up</a></li>
							<li><a href="login.html">Log In</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact</a></li>
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
					<li><a href="index.php">Purchase</a></li>
				</ul>
			</nav>
		</header>

		<section id="main" class="container medium">
			<header>
				<h2>Success</h2>
			</header>
			<div class="box">
				<li><a href="index.php">Return to the main page</a></li>
			</div>
		</section>

</body>
</html>