<?php include_once("./auth.php")?>
<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Mk Fashion | Products</title>

    <!-- css links include -->
    <?php require_once("./includes/css-links.php") ?>

</head>

<body>



    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>MK Fashion House</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header imaage end -->

    <!-- best seller slider -->
<div class="conateiner p-5 mt-5">
    <div class="container mb-5">

    <div class="row">
                <div class="col-lg-4">
                    <div class="card border-none shadow-lg p-5">
                    <h3 class="mb-0">WElcome <?= $_SESSION['name'] ?></h3>
                        <div class="card-body">
                            <div class="d-flex flex-column  mb-4">
                            
                                <div class="media-body text-center">
                                <h5 class="mb-0"> <?= $_SESSION['name'] ?></h5>
                                </div>
                            </div>


                            <ul class="card-profile__info">
                                <li class="mb-2 ms -5"><strong class="text-dark mr-4">Mobile</strong> <span><?= $_SESSION['mobile'] ?></span></li>
                                <li class="mb-2"><strong class="text-dark mr-4">Email</strong> <span><?= $_SESSION['email'] ?></span></li>
                                <li class="mb-2"><strong class="text-dark mr-4">City</strong> <span><?= $_SESSION['city'] ?></span></li>


                            </ul>

                            
                            <div class="row my-3 mt-5">
                                <div class="col-12 text-center">
                                    <a href="profile-edit.php?id=<?= $row['id'] ?>"><button class="btn btn-danger px-5">Edit Profile <i class="fa fa-edit"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
</div>
</div>
    

    <!-- best seller end -->


    

    <!-- footer include -->
    <?php require_once("./includes/footer.php") ?>

    <!-- javascript lins include -->
    <?php require_once("./includes/javascript-links.php") ?>



</body>

</html>