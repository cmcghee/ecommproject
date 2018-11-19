<!DOCTYPE html>
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
              <li><a href="index.php">Home</a></li>
              <li>
                <a href="#" class="icon fa-angle-down">Menu</a>
                <ul>
                <li><a href="memberabout.html">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                <li><a href="memberabout.html">About Us</a></li>
                <li><a href="membercontact.php">Contact</a></li>
                </ul>
                <li><a href="index.php">Logout</a></li>
            </ul>
          </nav>
        </header>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>View Your Information</h2>
</div>
<div class="divB">
<div class="divD">
<!-- <p>Click On Menu</p> -->
<?php
$connection = mysql_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646"); // Establishing Connection with Server
// $db = mysql_select_db("company", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("SELECT * FROM d3au1dsacafa29", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href="readphp.php?id={$row['email']}">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['email'])) {
$id = $_GET['email'];
$query1 = mysql_query("SELECT * FROM d3au1dsacafa29 WHERE id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['name']; ?>
<span>E-mail:</span> <?php echo $row1['email']; ?>
//<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
<span>Address:</span> <?php echo $row1['address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>