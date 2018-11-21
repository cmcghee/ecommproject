<?php
    
    session_start();
	ini_set('display_errors', 1);


   	$dbconn = pg_connect("host=ec2-184-72-234-230.compute-1.amazonaws.com port=5432 dbname=d3au1dsacafa29 user=zbujcjxtcupcbv password=a415fc185f58773e0af4dcf7a642a5ae27158298a6b28dbcbe3dfd4c4cb9d646");

   	$hashedpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$query = "INSERT INTO currentusers (email, password, name, state, address, zipcode, city) VALUES ('$_POST[email]', '$hashedpassword', '$_POST[name]','$_POST[State]', '$_POST[address]', '$_POST[zip]', '$_POST[city]')";

	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $email= $_POST['email'];

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
    $mail->Subject = 'Account Created!';
    $mail->Body    = 'Thanks for creating an account!';
	

	if (pg_query($dbconn,$query))  {
		$_SESSION['loggedin'] = true;
		$mail->send();
		header("Location: memberpage.php");
    }
    else  {
        $text = "Failed, email in use";
    }

?>

<!DOCTYPE html>
