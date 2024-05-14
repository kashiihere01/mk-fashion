<?php
require_once("./auth.php");

require_once("includes/db-con.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // get data from form...
    $city = $_POST['city'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $mobile = $_POST['mobile'];


   
    // update qry run here....

    $query = "UPDATE `customers` SET `name`='$name',`city`='$city',`mobile`='$mobile',`email`='$email',`password`='$password' WHERE `id`='$id'";

    if (mysqli_query($con, $query)) {

        
        header("Location:profile.php");
    } else {
        
        header("Location:profile.php");
    }
}


//exit;
