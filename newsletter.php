<?php

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$email=$_POST['Email'];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pbgp123456@gmail.com';                     //SMTP username
    $mail->Password   = 'cerkaarewkaofidf';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('13ritesh1998@gmail.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thanks for subscribing Newsletter !';
    $mail->Body    = 'Thanks for subscribing Newsletter ! <b>in bold!</b>';
    $mail->AltBody = 'Thanks for subscribing Newsletter !';

    $mail->send();
    echo 'Message has been sent';
    $Flag=1;
    header("Location:index.php?Flag=$Flag");
    
} catch (Exception $e) {
    $Flag=2;
    header("Location:index.php?Flag=$Flag");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}