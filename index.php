

<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>MK Fashion | Home</title>

    <!-- css links include -->
    <?php require_once("./includes/css-links.php") ?>
</head>

<body>

    <!-- header-section include -->
    <?php require_once("./includes/header.php") ?>
    <?php
    // select categories
    $cats = getCategories($con);

    // get products
    $products = getProducts($con);

    $featureProducts = getFeatureProducts($con);

    $latestProducts = getLatestProducts($con);




    ?>


    <!-- Latest Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
            <div class="section-title product__discount__title">
                    <h2>Lastest Product</h2>
                </div>
                <div class="categories__slider owl-carousel">
                    <?php while ($row = mysqli_fetch_assoc($latestProducts) ) { ?>
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="<?php echo getImageUrl("product", $row['product_image']) ?>">
                                
                            </div>
                        </div>
                    <?php }
                    
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">

                <?php while ($pt = mysqli_fetch_assoc($featureProducts)) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php $ptc = getCategroyById($con, $pt['category_id']);
                                                                echo $ptc['category'] ?>">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="<?php echo getImageUrl("product", $pt['product_image']) ?>">
                                <ul class="featured__item__pic__hover">
                                    
                                    <li><a href="product-details.php?pid=<?= $pt['id']?>"><i class="fa fa-retweet"></i></a></li>
                                   
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="product-details.php?pid=<?= $pt['id'] ?>"><?= $pt['product_name'] ?></a></h6>
                                <h5>RS :<?= $pt['product_price'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php }
                mysqli_data_seek($featureProducts, 0);
                ?>

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- --Banner End -->


    <!-- start latest post slider -->
    <div class="container mt-5">
        <div class="col-lg-12 col-md-7">
            <div class="product__discount">
                <div class="section-title product__discount__title">
                    <h2>Product Categories</h2>
                </div>
                <section class="categories">
                    <div class="container">
                        <div class="row">
                            <div class="categories__slider owl-carousel">
                                <?php while ($row = mysqli_fetch_assoc($cats)) { ?>
                                    <div class="col-lg-3">
                                        <div class="categories__item set-bg" data-setbg="<?php echo getImageUrl("categories", $row['category_image']) ?>">
                                            <h5><a href="./products.php"><?= $row['category'] ?></a></h5>
                                        </div>
                                    </div>
                                <?php }
                                mysqli_data_seek($cats, 0);
                                ?>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- end latest post slider-->

    
                             
                             
    <!-- footer includes -->
    <?php require_once("./includes/footer.php")  ?>


    <!-- js links includes -->

    <?php require_once("./includes/javascript-links.php") ?>



</body>

</html>