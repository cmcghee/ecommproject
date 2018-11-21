<?php
  session_start();
  if(!($_SESSION['loggedin'] == 1)){
	  header("Location: index.php");
  }
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/contact.css" />
  </head>
  <body class="is-preload">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header" class="alt">
          <a href="index.php"></a><span class="image featured"><img src="images/logo.png" width="50%" /></span>
          <nav id="nav">
            <ul>
              <li><a href="memberpage.php">Home</a></li>
              <li>
                <a href="#" class="icon fa-angle-down">Options</a>
                <ul>
                <li><a href="userinfo.php">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                <li><a href="memberabout.php">About Us</a></li>
                <li><a href="membercontact.php">Contact</a></li>
                </ul>
                <li><a href="purchase.php">Purchase</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
          </nav>
        </header>

      <!-- Main -->
        <section id="main" class="container medium">
          <header>
            <h2>Contact Us</h2>
          </header>
          <div class="box">
            <form method="post" action="email.php">
              <div class="row gtr-50 gtr-uniform">
                <div class="col-6 col-12-mobilep">
                  <input type="text" name="name" id="name" value="" placeholder="Name" />
                </div>
                <div class="col-6 col-12-mobilep">
                  <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <div class="col-12">
                  <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                </div>
                <div class="col-12">
                  <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                </div>
                <div class="col-12">
                  <ul class="actions special">
                    <button type="submit" name="submit" class="button">Send Message</button>
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