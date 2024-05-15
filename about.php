<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>M.K Fashion | Contact us</title>
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
                        <h2>About Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <div class="container">
    <div class="section-title product__discount__title mt-3">
                    <h2>About Our Site</h2>
                </div>
        <p>
Welcome to M.K Fashion House, your ultimate destination for exquisite party and bridal wears that redefine elegance and style. At M.K Fashion House, we specialize in crafting bespoke attire that caters to your unique taste and individuality, ensuring you stand out on every occasion.
</p>
<!-- line 1 -->
<ul>
    <li class="mt-3 ms-5">
        
For those special moments that deserve nothing but the best, explore our stunning bridal wears collection. Each piece is imbued with timeless romance and impeccable craftsmanship, ensuring you look and feel like royalty on your big day. Whether you envision a traditional fairytale wedding or a modern, chic celebration, we have the perfect ensemble to fulfill your dreams.

    </li>
    <!-- line 2 -->
    <li class="mt-2">
    Indulge in our curated collection of party wears, meticulously designed to make you the center of attention at any gathering. From glamorous cocktail dresses to sophisticated evening gowns, our range exudes sophistication and glamour, promising to elevate your ensemble to new heights.


    </li>
    <!-- line 3 -->
    <li class="mt-3 ms-5">
    At M.K Fashion House, we believe in the power of personalization. Our expert team works closely with you to understand your vision and bring it to life, creating custom pieces that reflect your unique style and personality. With attention to detail and a commitment to excellence, we strive to exceed your expectations with every creation.

    </li>
    <!-- line 4 -->

</ul>
<p class="mt-2">
Experience the epitome of luxury and sophistication with M.K Fashion House. Explore our collection today and discover the perfect outfit for every special moment in your life.

</p>
<!-- line 5 -->
    </div>

        <!-- footer includes -->
        <?php require_once("./includes/footer.php")  ?>

        <!-- js links includes -->
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