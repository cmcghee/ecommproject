<?php
session_start();
//echo session_status();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="assets/css/contact.css" />
  </head>
  <body class="is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <header id="header" class="alt">
        <a href="index.html"></a
        ><span class="image featured"
          ><img src="images/logo.png" width="50%"
        /></span>
        <nav id="nav">
          <ul>
            <li><a href="memberpage.php">Home</a></li>
            <li>
              <a href="#" class="icon fa-angle-down">Options</a>
              <ul>
                <li><a href="userinfo.php">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                <li><a href="memberabout.php">About Us</a></li>
                <li><a href="membercontact.php">Contact</a></li>
                <!--
                  <li>
                  	<a href="#">Submenu</a>
                  	<ul>
                  		<li><a href="#">Option One</a></li>
                  		<li><a href="#">Option Two</a></li>
                  		<li><a href="#">Option Three</a></li>
                  		<li><a href="#">Option Four</a></li>
                  	</ul>
                  </li>
                -->
                
              </ul>
            </li>
            <li><a href="purchase.php">Purchase</a></li>
            <li><a href="index.php">Logout</a></li>
          </ul>
        </nav>
      </header>

      <!-- Main -->
      <section id="main" class="container medium">
        <header><h2>About Us</h2></header>

        <section class="box special">
          <header class="major">
            <h3>
              GlideTech is a company based in Charlottesville, VA, implementing
              artificial intelligence technologies to create a product to
              optimize work, office, and home environments. Our products are
              designed to efficiently help you to maintain organization and
              cleanliness.
            </h3>
            <!-- <p></p> -->
          </header>
          <span class="image featured"
            ><img src="images/intelchair.jpg" alt=""
          /></span>
          <header class="major">
            <h3>
              Our products navigate their environments using highly sensitive
              cameras. Chairs placed in the same room can communicate with one
              another, powered by Bluetooth, so as to even more efficiently
              perform their operations, while not having a far enough reach to
              disturb those in a neighboring room. Their communications also
              allow them to quickly and correctly determine how to arrange
              themselves in order to conform to the demands of a given specific
              environment.
            </h3>
          </header>
          <header>
            <span class="image featured"
              ><img src="images/self-parking-chair.jpg" alt=""
            /></span>
            <h3>
              Waste elimination systems are built into the chairs themselves so
              that they can not only collect waste from the floor with powerful
              built in vacuums, but also process it for disposal.
            </h3>
          </header>

          <!-- <ul class="actions special">
            <li><a href="signup.php" class="button primary">Sign Up</a></li>
          </ul> -->
        </section>
      </section>
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
