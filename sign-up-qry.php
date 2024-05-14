<?php
require_once("./includes/db-con.php");

if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['signup'] === "signup") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);


    $password  = $_POST['password'];

    // verify username should be unique
    $select_q = "SELECT * FROM customers WHERE name='$name' ";
    $result = mysqli_query($con, $select_q);

    if (mysqli_num_rows($result)  === 1) {
        die("user is already registered");
    }
    $select_e = "SELECT * FROM customers WHERE email='$email' ";
    $result = mysqli_query($con, $select_e);

    if (mysqli_num_rows($result)  === 1) {
        die("user is already registered");
    }
    // insert
    $sql = "INSERT INTO customers (`name`, `email`, `password` , `city`,`mobile`) 
    VALUES('$name', '$email', '$password' , '$city', '$city') ";

    if (mysqli_query($con, $sql)) {

        header("Location:index.php");
    }
}
