<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add User - Dashboard</title>

    <!-- css-links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>
<body>
    <!-- navbar code start -->
   
    <!-- Form code start -->
<div class="container w-50 mt-5 m">

      
            <form method="POST" action="./signup_qry.php" class="container shadow-lg">
                <h3 class="text-center mt-5 p-4">Add User Form</h3>
                
<div class="row">
<div class=" col-4 ">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control shadow borderless" placeholder="Enter here..." name="password" id="exampleInputPassword1" required>
                </div>
                <!-- input 1 -->
                <div class=" col-4 mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter here..." name="password" id="exampleInputPassword1" required>
                </div>
                <!-- input 2 -->
                <div class=" col-4 mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter here..." name="password" id="exampleInputPassword1">
                </div>
                <!-- input -->
                <div class=" col-4 mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter here..." name="password" id="exampleInputPassword1">
                </div>
                <!-- input -->

</div>

                <button type="submit" name="login" class="btn btn-success d-block w-100 mx-auto" value="submit">Submit</button>

                <p class="mt-3">Already Registered? <a href="login.php" class="text-decoration-none">Login Now</a></p>

            </form>
     
    </div>
    

    <!-- Form code end -->
</div>
    


    <!-- masking files and function start -->

    <script src="./includes/jquery.min.js"></script>
    <script src="./includes/jquery.inputmask.bundle.js"></script>

    <script>
        $(":input").inputmask();
    </script>
</body></html>