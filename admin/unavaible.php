<?php

include("db-con.php");
$id = $_GET["id"];
if(!empty($id)){

    $inactive_status = "UPDATE products SET 'status' = 0 WHERE id = '$id'";
    $inactive_status_run = mysqli_query($con,$inactive_status);
    if($inactive_status_run){
        header("Location:products.php");
    }

}

?>