<?php
   	$dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");
   	if(!$dbconn) {
      echo "Error : Unable to open database\n";
   	} else {
      echo "Opened database successfully\n";
   	}

	$query = "INSERT INTO siteUsers (email, password, name, state, address, zipcode, city) VALUES ('$_POST[email]','$_POST[password]', '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";
	//pg_query($db, $query);

	if (pg_query($dbconn,$query))  {
        echo "user created successfully. ";
    }
    else  {
        echo "Error creating user. ";
    }
    echo $query;
?>