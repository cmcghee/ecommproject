<?php
   	$dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");
       $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "SELECT * FROM currentusers WHERE email='$email' and password='$hashedpassword'";
    $pass = pg_query($dbconn,$query) or die('Email not found.');
    echo($pass);
	if($pass){
		Header("location: memberpage.php");
	}
	else{
		$message = "Wrong password";
		echo "<script type='text/javascript'>alert('$message');</script>";
		Header("location: index.php");
	}


?>