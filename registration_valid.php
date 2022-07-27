<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $phonenumber = $_POST['PhoneNumber'];
    $password = $_POST['Password'];
    $cpassword = $_POST['cpassword'];
    // echo $firstname,$lastname,$email,$phonenumber,$password;
    $connection = new mysqli("localhost", "admin", "admin", "dbpost");
    
    //cheacking if user already exist with email id
    $check = "SELECT * FROM users WHERE UserEmail='$email';";
    $table = mysqli_query($connection, $check);
    $rows = mysqli_num_rows($table);

    //info validation
    $flagg=12;
    if ($rows == 0) {
        $register = "INSERT INTO users (UserEmail, UserPassword, UserFirstName, UserLastName, UserCity, UserState, UserZip, UserEmailVerified, UserRegistrationDate, UserVerificationCode, UserIP, UserPhone, UserFax, UserCountry, UserAddress, UserAddress2) VALUES ('$email', '$password', '$firstname', '$lastname', NULL, NULL, NULL, '0', CURRENT_TIMESTAMP, NULL, NULL, '$phonenumber', NULL, NULL, NULL, NULL);";
        mysqli_query($connection, $register);
        $flagg=1;
        success($email,$firstname);
        header("Location:sign_in_up.php?flagg=$flagg");            

        } else {
            $flagg=2;
        header("Location:sign_in_up.php?flagg=$flagg");            

        }
    
function success($email,$firstname){

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
    $mail->addAddress($email, $firstname);     //Add a recipient



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thanks for registration !';
    $mail->Body    = 'Thanks '.$firstname.' for registration on <a><b>www.electronic.com</b></a>';
    $mail->AltBody = 'Thanks '.$firstname.' for registration on <a><b>www.electronic.com</b></a>';

    $mail->send();
        echo 'Message has been sent';
    } 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>