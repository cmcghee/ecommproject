<?php
	$host        = "host = ec2-184-72-234-230.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = d3au1dsacafa29";
	$credentials = "user = zbujcjxtcupcbv  password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646";

	$db = pg_connect( "$host $port $dbname $credentials"  );

	$query = "INSERT INTO siteUsers VALUES ('$_POST[email]','$_POST[password]', '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";
	$result = pg_query($query); 
?>