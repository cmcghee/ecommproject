<?php
ini_set('display_errors', 1);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>View Your Inforamtion</title>
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
                <li><a href="memberabout.html">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                <li><a href="memberabout.html">About Us</a></li>
                <li><a href="membercontact.php">Contact</a></li>
                </ul>
                <li><a href="index.php">Logout</a></li>
            </ul>
          </nav>
        </header>

        

      <!-- Main -->
        <section id="main" class="container medium">
          <header>
            <h2>View Profile</h2>
            
          </header>


            <?php
            $dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

            $query = pg_query($dbconn, "SELECT * FROM currentusers WHERE email='firestone361@gmail.com'");
                $row = pg_fetch_row($query);
            ?>



            <head>
            <style>
            table, th, td {
                border: 1px solid black;
            }
            </style>
            </head>

            <h2>Your Current Information: </h2>

            <table style="width:100%">
            <tr>
                <th> <?php echo "Full Name: " ?> </th>
                <th> <?php echo "Email: " ?> </th> 
                <th> <?php echo "Address: " ?> </th>
                <th> <?php echo "City: " ?> </th>
                <th> <?php echo "State: " ?> </th>
                <th> <?php echo "Zipcode: " ?> </th>
            </tr>

            <tr>
                <td> <?php echo "$row[2]" ?> </td>
                <td> <?php echo "$row[0]" ?> </td> 
                <td> <?php echo "$row[4]" ?> </td>
                <td> <?php echo "$row[6]" ?> </td>
                <td> <?php echo "$row[3]" ?> </td>
                <td> <?php echo "$row[5]" ?> </td>
            </tr>
            </table>


            </table>



          <!-- <div class="box">
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
          </div> -->
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