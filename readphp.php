<!DOCTYPE html>
<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("company", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("SELECT * FROM d3au1dsacafa29", $connection);
while ($row = mysql_fetch_array($query)) {
//echo "<b><a href="readphp.php?id={$row['email']}">{$row['name']}</a></b>";
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