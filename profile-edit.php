<?php

require_once("./auth.php");
require_once("includes/db-con.php");

$get_user_id = $_GET['id'];

$select = "SELECT * FROM customers WHERE id='$get_user_id'";
$result = mysqli_query($con, $select);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edit Profile</title>

    <!-- css-links include -->
    <link rel="stylesheet" href="./css/style2.css">

    <?php require_once("./includes/css-links.php") ?>

</head>

<body>




               
                <div class="wrapper">

<div class="title">
 <i class="fa fa-edit text-white"></i> Edit Profile</div>

<form action="profile-update-qry.php" method="POST">
   <div class="field " >
      <input type="text" name="name" value="<?= $row['name'] ?>"  placeholder="Enter Your Name">
      <label>Enter Your Name</label>
   </div>
   <input type="hidden" name="id" value="<?= $get_user_id ?>">

   <div class="field " >
      <input type="text" name="email" value="<?= $row['email'] ?>" placeholder="Enter Your Name">
      <label>Enter Your Email</label>
   </div>
   <div class="field " >
      <input type="text" name="city" value="<?= $row['city'] ?>" placeholder="City">
      <label>Enter City</label>
   </div>
   <div class="field " >
      <input type="password" name="password" value="<?= $row['password'] ?>" placeholder="email">
      <label>Password</label>
   </div>
   <div class="field " >
      <input type="number" name="mobile"value="<?= $row['mobile'] ?>"  placeholder="Enter Your mobile">
      <label>Enter Your Mobile</label>
   </div>
   <div class="field">
      <input type="submit" name="signup" value=" Edit Profile">
   </div>
   
</form>
</div>


            
           



</body>

</html>