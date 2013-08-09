<?php

require 'libs/class.phpmailer.php';

$name = trim( $_POST['name'] );
$email = trim( $_POST['email'] );
$phone = trim( $_POST['phone'] );
$message = nl2br( $_POST['message'] );

$mail = new PHPMailer;

$mail->From = 'from@example.com';
$mail->FromName = 'Your Name';
$mail->AddAddress('your@email.com', 'Your Name');
$mail->AddReplyTo($email, $name);

$mail->IsHTML(true);

$mail->Subject = 'Hello :)';
$mail->Body    = "<strong>Name: </strong>$name <br>";
$mail->Body    .= "<strong>Email: </strong>$email <br>";

if( !empty($phone) ) {
  $mail->Body    .= "<strong>Phone: </strong>$phone <br>";
}

$mail->Body    .= "<strong>Message: </strong>$message";


if( !$mail->Send() ) {
   echo "fail";
   exit;
}

echo "sent";
exit;