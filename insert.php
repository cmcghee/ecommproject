<?php
	$host        = "host = ec2-184-72-234-230.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = d3au1dsacafa29";
	$credentials = "user = zbujcjxtcupcbv  password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646";

	$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db) {
      echo "Error : Unable to open database\n";
   	} else {
      echo "Opened database successfully\n";
   	}

	$query = "INSERT INTO siteUsers (email, password, name, state, address, zipcode, city) VALUES ('$_POST[email]','$_POST[password]', '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";
	pg_query($query);
	echo $query;
?>