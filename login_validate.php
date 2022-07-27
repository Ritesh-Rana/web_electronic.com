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

    session_start();
    $_SESSION['auth']=false;

        if ($rows == 1) {
            $_SESSION['userfname']=$array['UserFirstName'];
            $_SESSION['userlname']=$array['UserLastName'];
            $_SESSION['user_id']=$array['UserID'];
            $_SESSION['useremail']=$array['UserEmail'];
            $_SESSION['usercontact']=$array['UserPhone'];
            $_SESSION['login']="Login successeful";
            $_SESSION['auth']=true;
            header("Location: user_account.php");

        } else {

            $_SESSION['auth']=false;
            $_SESSION['login']="Login failed";
            header("Location:sign_in_up.php");
        }
    ?>
