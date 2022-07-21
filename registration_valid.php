<?php

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['Email'];
    $phonenumber = $_POST['PhoneNumber'];
    $password = $_POST['Password'];
    $cpassword = $_POST['cpassword'];
    // echo $firstname,$lastname,$email,$phonenumber,$password;
    $connection = new mysqli("localhost", "admin", "admin", "dbpost");
    if ($connection->connect_error) {
        echo "failed to connect";
    }

    //cheacking if user already exist with email id
    $check = "SELECT * FROM users WHERE UserEmail='$email';";
    $table = mysqli_query($connection, $check);
    $rows = mysqli_num_rows($table);

    //info validation
    $error = "";
    if (!preg_match("/^[a-z A-Z ]+$/", $firstname)) {
        $error .= "Name must contain only alphabets and space" . "<br>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= "Please Enter Valid Email ID";
    }
    if (strlen($password) < 4) {
        $error .= "Password must be minimum of 4 characters" . "<br>";
    }
    if (!(strlen($phonenumber) == 10)) {
        $error .= "Mobile number must be of 10 digit" . "<br>";
    }
    if ($password != $cpassword) {
        $error .= "Password and Confirm Password doesn't match" . "<br>";
    }

    if ($error =="") {
        if ($rows == 0) {
            $register = "INSERT INTO users (UserEmail, UserPassword, UserFirstName, UserLastName, UserCity, UserState, UserZip, UserEmailVerified, UserRegistrationDate, UserVerificationCode, UserIP, UserPhone, UserFax, UserCountry, UserAddress, UserAddress2) VALUES ('$email', '$password', '$firstname', '$lastname', NULL, NULL, NULL, '0', CURRENT_TIMESTAMP, NULL, NULL, '$phonenumber', NULL, NULL, NULL, NULL);";
            mysqli_query($connection, $register);
            header("Location:index.php");
        } else {
        }
    } else {
    }



    ?>
