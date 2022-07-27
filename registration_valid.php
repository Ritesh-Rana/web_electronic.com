<?php

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
        header("Location:sign_in_up.php?flagg=$flagg");            

        } else {
            $flagg=2;
        header("Location:sign_in_up.php?flagg=$flagg");            

        }
    
?>