<?php

    session_start();
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $id=$_SESSION['user_id'];

    echo $firstname,$lastname,$city,$country,$state,$address1,$address2;
    echo "id=".$id;
    $connection = new mysqli("localhost", "admin", "admin", "dbpost");
    
    $sql="UPDATE `users` SET `UserFirstName` = '$firstname', `UserLastName` = '$lastname', 
                            `UserCity` = '$city', `UserState` = '$state', 
                            `UserZip` = '$zipcode', `UserCountry` = '$country', 
                            `UserAddress` = '$address1', `UserAddress2` = '$address2' 
                            WHERE `users`.`UserID` = '$id';";

    mysqli_query($connection,$sql);
            $_SESSION['userfname']=$firstname;
            $_SESSION['userlname']=$lastname;
            $_SESSION['city']=$city;
            $_SESSION['zipcode']=$zipcode;
            $_SESSION['country']=$country;
            $_SESSION['state']=$state;
            $_SESSION['address1']=$address1;
            $_SESSION['address2']=$address2;
            $_SESSION['login']="Details Saved";
    header("Location:user_account.php");
?>