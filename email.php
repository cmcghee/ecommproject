<?php
if(isset($_POST['submit'])){
    
require_once('PHPMailer-master/src/class.phpmailer.php');
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");

 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->setFrom('glidetechcompany@gmail.com', 'GlideTech');
 $mail->addAddress($email);
 $mail->Subject  = 'Contact Us Submission';
 $mail->Body     = "Thank you for contacting our service!";
 if(!$mail->send()) {
   echo 'Message was not sent.';
   echo 'Mailer error: ' . $mail->ErrorInfo;
 } else {
   echo 'Message has been sent.';
 }
    
}

?>