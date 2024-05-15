
<?php
session_start();
require_once("db-con.php");
require_once("helpers.php");
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
  
                    <a href="./index.php"><img src="img/logo.png" alt="" ></a>
                
    </div>
  
    <div class="humberger__menu__widget">

                               
    <?php

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo " <div class='header__top__right__auth'>
  <a href='login.php'><i class='fa fa-user'></i> My Account</a>

</div>
| 
<div class='header__top__right__auth'>
  <a href='login.php'> Logout <i class='fa fa-sign-out' aria-hidden='true'></i></a>

</div>
";
} else {
    echo '              <div class="header__top__right__auth">
<a href="login.php"><i class="fa fa-user"></i> Login</a>

</div>
<div class="header__top__right__auth">
<a href="register.php">| <i class="fa fa-user"></i> Register</a>

</div>';
}

?>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
    <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><img src="img/tiktok.png" alt="" height="22px"></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> adibavirk51@gmail.com</li>
            <li>Shipping in 3 , 4 days</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> adibavirk51@gmail.com</li>
                            <li>Shipping in 3 , 4 days</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-whatsapp"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><img src="img/tiktok.png" alt="" height="22px"></a>
                        </div>
                        
                        <?php

                        if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                            echo " <div class='header__top__right__auth'>
                          <a href='profile.php'><i class='fa fa-user'></i> My Account</a>
                    
                      </div>
                       | 
                      <div class='header__top__right__auth'>
                          <a href='logout.php'> Logout <i class='fa fa-sign-out' aria-hidden='true'></i></a>
                    
                      </div>
                      ";
                        } else {
                            echo '              <div class="header__top__right__auth">
<a href="login.php"><i class="fa fa-user"></i> Login</a>

</div>
<div class="header__top__right__auth">
<a href="register.php">| <i class="fa fa-user"></i> Register</a>

</div>';
                        }

                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>

                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./products.php">Products</a></li>

                        <li><a href="./about.php">About</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->


<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
          
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="search-qry.php" method="POST">
                         
                            <input type="search" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn" name="search">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+92 347 0069802</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->