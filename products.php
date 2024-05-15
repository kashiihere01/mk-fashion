<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Mk Fashion | Products</title>

    <style>
      .call-icons{
        position: fixed;
        bottom: 25px;
        right: 25px;
      }

      .wa-icons{
        position: fixed;
        bottom: 25px;
        left: 25px;
      }
    </style>
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

    $getBestseller = getBestseller($con);




    ?>
     <!-- Call Button -->
     <img src="./img/call.png" class="call-icons"  height="50px"  onclick="openCallDial()">

<!-- WhatsApp Button -->
  <img src="./img/whatsapp.png" class="wa-icons" height="50px" onclick="openWhatsAppChat()">
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

    <!-- Latest Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="section-title product__discount__title mt-3">
                    <h2>Best Seller</h2>
                </div>
                <div class="categories__slider owl-carousel">
                    <?php while ($row = mysqli_fetch_assoc($getBestseller)) { ?>
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



    <!-- best seller end -->


    <div class="filter__item container">
        <div class="section-title product__discount__title mt-3">
            <h2>All Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-5">
           
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="filter__found">
                    <h6><span>16</span> Products found</h6>
                </div>
            </div>
            <!-- products -->
            <div class="row featured__filter">

                <?php while ($pt = mysqli_fetch_assoc($products)) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php $ptc = getCategroyById($con, $pt['category_id']);
                                                                echo $ptc['category'] ?>">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="<?php echo getImageUrl("product", $row['product_image']) ?>">
                                <ul class="featured__item__pic__hover">

                                    <li><a href="product-details.php?pid=<?= $pt['id'] ?>"><i class="fa fa-retweet"></i></a></li>

                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="product-details.php?pid=<?= $pt['id'] ?>"><?= $pt['product_name'] ?></a></h6>
                                <h5>RS :<?= $pt['product_price'] ?></h5>
                            </div>
                        </div>
                    </div>
                <?php }
                mysqli_data_seek($products, 0);
                ?>

            </div>
        </div>
        <!-- product end -->

        <?php
    // Total number of products
    $totalProducts = mysqli_num_rows($products);

    // Number of products per page
    $productsPerPage = 4; // You can adjust this as needed

    // Calculate total pages
    $totalPages = ceil($totalProducts / $productsPerPage);

    // Get current page number, default to 1 if not set
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // Calculate the offset for the query
    $offset = ($currentPage - 1) * $productsPerPage;

    // Modify your query to include LIMIT and OFFSET
    $query = "SELECT * FROM products LIMIT $offset, $productsPerPage";
    $result = mysqli_query($con, $query);

    // Display products
    while ($pt = mysqli_fetch_assoc($result)) {
        // Your product display code here
    }

    // Generate pagination links
    echo '<div class="product__pagination">';
    for ($i = 1; $i <= $totalPages; $i++) {
        // Add active class for the current page
        $activeClass = ($currentPage == $i) ? 'active' : '';
        echo '<a class="' . $activeClass . '" href="products.php?page=' . $i . '">' . $i . '</a>';
    }
    echo '</div>';
?>

      
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Product Section End -->


    <!-- footer include -->
    <?php require_once("./includes/footer.php") ?>

    <!-- javascript lins include -->
    <?php require_once("./includes/javascript-links.php") ?>

    <script>
    // Function to open call dialer
function openCallDial() {
  // Replace '123456789' with the actual phone number you want to call
  window.location.href = 'tel:+123456789';
}

// Function to open WhatsApp chat
function openWhatsAppChat() {
  // Replace '123456789' with the actual phone number you want to chat with
  window.location.href = 'https://wa.me/123456789';
}
   </script>

</body>

</html>