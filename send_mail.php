<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$email="deepakkurmi874@gmail.com";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'rajakurmi2018@gmail.com';
$mail->Password = 'iamtheking12,.';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
echo "1";
$mail->setFrom('rajakurmi2018@gmail.com');
$mail->addAddress($email);
$mail->isHTML(true);
echo "2";
$mail->Subject = "Activation Link Click to Verify";
$mail->Body ="<h3>hii</h3>";
echo "3";
$mail->send();
echo "4";

echo "<center><p style='color:green;'>An Activation Link is sent to your registered email.Please verify your email!<br></p></center>";

?>