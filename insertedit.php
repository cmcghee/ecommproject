<?php
   	$dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

   	// $hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$query = "UPDATE currentusers SET name='$_POST[name]', address=$_POST[address]', city='$_POST[city]', state='$_POST[state]', zipcode='$_POST[zip]' WHERE email='firestone361@gmail.com'";


	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
    $email= $_POST['email'];

	require 'PHPMailer-master/src/Exception.php';
	require 'PHPMailer-master/src/PHPMailer.php';
	require 'PHPMailer-master/src/SMTP.php';
	$mail = new PHPMailer();                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'glidetechcompany@gmail.com';                 // SMTP username
    $mail->Password = 'mcghee13';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('glidetechcompany@gmail.com', 'GlideTech');
    $mail->addAddress($email);     // Add a recipient

    //Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Account Information Edited';
    $mail->Body    = 'Your account information has been edited. If you did not make these changes please contact us. ';
	

	if (pg_query($dbconn,$query))  {
        $text = "Success";
        $mail->send();
    }
    else  {
        $text = "Error - please try again";
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
			<a href="index.php"></a><span class="image featured"><img src="images/logo.png" width="40%" /></span>
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
					<li><a href="index.php">Purchase</a></li>
				</ul>
			</nav>
		</header>

		<section id="main" class="container medium">
			<header>
				<h2><?php echo $text?></h2>
			</header>
			<div class="box">
				<li><a href="index.php">Return to the main page</a></li>
			</div>
		</section>

</body>
</html>