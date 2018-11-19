<?php

    $dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

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
    $mail->Subject = 'Contact Us Submission';
    $mail->Body    = 'Thanks for the feedback!';

    $query = "INSERT INTO contact (name, email, message) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[message]')";

    if (pg_query($dbconn,$query))  {
        $text = "Success";
        $mail->send();
    }
    else  {
        $text = "Failed";
    }

?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Contact - Alpha by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/contact.css" />
  </head>
  <body class="is-preload">
    <div id="page-wrapper">

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
                  <li><a href="login.php">Log In</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              <li><a href="index.php">Purchase</a></li>
            </ul>
          </nav>
        </header>

      <!-- Main -->
        <section id="main" class="container medium">
          <header>
            <h2>We will contact you back shortly</h2>
          </header>
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