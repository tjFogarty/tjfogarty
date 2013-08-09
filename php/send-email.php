<?php

require 'libs/class.phpmailer.php';

$name = trim( $_POST['name'] );
$email = trim( $_POST['email'] );
$phone = trim( $_POST['phone'] );
$message = nl2br( $_POST['message'] );

$mail = new PHPMailer;

$mail->From = 'from@example.com';
$mail->FromName = 'Your Name';
$mail->AddAddress('tj@diginomarketing.com', 'TJ Fogarty');
$mail->AddReplyTo($email, $name);
$mail->AddBCC('forms@diginomarketing.com');

$mail->IsHTML(true);

$mail->Subject = 'Company Name | Request a callback';
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