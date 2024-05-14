<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title> Sign up | MK Fashion</title>
</head>

<body>

<div class="wrapper">

         <div class="title">
            Signup Form
         </div>
      
         <form action="sign-up-qry.php" method="POST">
            <div class="field " >
               <input type="text" name="name"  placeholder="Enter Your Name">
               <label>Enter Your Name</label>
            </div>
            <div class="field " >
               <input type="text" name="email"  placeholder="Enter Your Name">
               <label>Enter Your Email</label>
            </div>
            <div class="field " >
               <input type="text" name="city"  placeholder="City">
               <label>Enter City</label>
            </div>
            <div class="field " >
               <input type="password" name="password"  placeholder="email">
               <label>Password</label>
            </div>
            <div class="field " >
               <input type="number" name="mobile"  placeholder="Enter Your mobile">
               <label>Enter Your Mobile</label>
            </div>
            <div class="field">
               <input type="submit" name="signup" value="signup">
            </div>
            <div class="signup-link">
               Have an account? <a href="login.php">Login now</a>
            </div>
         </form>
      </div>
   </body>
   <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".credErr").hide();
            }, 5000);

        })
    </script>
</html>