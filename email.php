<?php    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //Recipients
    $mail->setFrom('glidetechcompany@gmail.com', 'GlideTech');
    $mail->addAddress($email);     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact Us Recieved';
    $mail->Body    = 'Thanks for contacting us!';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}}
else {
    echo "Message Not Sent";
}