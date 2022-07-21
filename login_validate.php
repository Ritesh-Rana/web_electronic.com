<?php

    $email = $_POST['Email'];
    $password = $_POST['Password'];
   
    $connection = new mysqli("localhost", "admin", "admin", "dbpost");
    if ($connection->connect_error) {
        echo "failed to connect";
    }

    //cheacking if user exist with email id or phone number and password
    $check = "SELECT * FROM users WHERE ((UserEmail='$email' OR UserPhone='$email') AND UserPassword='$password');";
    $result = mysqli_query($connection, $check);
    $rows = mysqli_num_rows($result);

    $array=mysqli_fetch_assoc($result);

        if ($rows == 1) {
            session_start();
            $_SESSION['userfname']=$array['UserFirstName'];
            $_SESSION['userlname']=$array['UserLastName'];
            $_SESSION['user_id']=$array['UserID'];
            $_SESSION['usercontact']=$array['UserPhone'];
            $_SESSION['isset']=true;
            header("Location: account.php");

        } else {
            header("Location:index.php");
        }
    ?>
