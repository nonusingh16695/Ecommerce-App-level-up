<?php


require("php/connection.php");

$selectquery = "SELECT * FROM men_products";
$result = mysqli_query($conn , $selectquery);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- remixicon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Javascript AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- fontawesome CDN -->
    <script src="https://kit.fontawesome.com/433e0a3e5b.js" crossorigin="anonymous"></script>



</head>

<body>

    <!-- header part MEN-->

    <header>

        <nav class="navbar">

            <div class="logo">
                <a href="http://localhost/php/levelup/index.php"><img src="images/level-up.WEBP" alt=""></a>
            </div>

            <ul class="menus">

                <li><a href="index.php" class="menus-link">Home</a></li>
                <li><a href="men.php" class=" menus-link active">Men</a></li>
                <li><a href="women.php" class="menus-link">Women</a></li>
                <li><a href="kids.php" class="menus-link">Kids</a></li>
                <!-- <li><a href="#" class="menus-link">About</a></li> -->
                <li><a href="contact.php" class="menus-link">Contact</a></li>
                <a href="http://localhost/php/levelup/singleproduct.php"><i class="ri-shopping-bag-line shopping-bag"></i></a>

            </ul>

        </nav>

    </header>


    <!-- men coupon part -->

    <div class="coupon">

        <h3 style="font-family: paragraph;">#Men</h3>
        <p style="font-family: paragraph; font-size:15px;">Save more with coupons & up to 76% off!</p>

    </div>

    <!-- men products -->

    <div class="men-products">

        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>

    </div>


    <!-- men cards Start-->



        <div class="card-wrapper">

            <?php

                 while($output = mysqli_fetch_assoc($result)){
    
            ?>

            <div class="card">

                    <div class="card-img">
                        <img src="<?php echo $output["productimage"] ?>" alt="">
                    </div>

                <div class="card-body">

                    <p class="sub" name="hooddie">
                        <?php echo $output["productname"] ?>
                    </p>

                    <h2 class="card-heading" name="description">
                        <?php echo $output["productdescription"] ?>
                    </h2>

                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>

                        <p class="price" name="price">
                            <?php echo $output["productprice"] ?>
                        </p>

                    <div class="icon">
                        <?php echo $output["carticon"] ?>
                    </div>
                        
                </div><!--card-body end-->

            </div><!--card end-->

            <?php

            }

            ?>

        </div> <!--card-wrapper end-->

 <!-- men cards End-->


        <!-- pagination Part -->

        <div class="pagination">

            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>

        </div>

        <!-- sign up input part -->

    <div class="discount-add-and">

<div class="discount-text">

    <h3 style="font-size: 45px; font-family: paragraph;">Sign Up For Newsletters</h3>
    <p style="font-size: 20px; font-family: light;">Get E-mail updates about our latest shop and <span
            style="color: #f15a4b;">special offers.</span></p>

</div>

<form method="GET" action="http://localhost/php/levelup/men.php">

<div class="discount-input">

    <input type="text" placeholder="Your email address" name="newsletter">
    <button name="Signup" style="font-family: paragraph; color: white;">Sign-Up</button>

</div>

</form>

</div>

        <!-- Men footer Part -->

        <footer>

<div class="footer-wrapper">

    <div class="footer-flex">

        <div class="level-up">

            <div class="level-logo space">

                <img src="images/level-up.WEBP" width="100px" alt="">

            </div>

            <h5 class="space">Contact</h5>
            <p style="margin-bottom: 4px;"><span style="font-weight: bold;">Address:</span> 562 Wellington Road.
                Street 32. San Francisco</p>
            <p style="margin-bottom: 4px;"><span style="font-weight: bold;">Phone:</span> +01 2222 365/(+91)01
                2345 6789</p>
            <p class="space"><span style="font-weight: bold;">Hours:</span> 1O:00 - 18:00.Mon - Sat</p>
            <h5 class="space">Follow us</h5>

            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"> <i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"> <i class="ri-pinterest-fill"></i></a>
            <a href="#"> <i class="ri-youtube-fill"></i></a>

        </div>

        <div class="about">

            <h5 class="space">About</h5>
            <a href="#">
                <p style="margin-bottom: 4px;">About Us</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">Delivery Information</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">Privacy Policy</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">Terms Conditions</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">Contact Us</p>
            </a>

        </div>

        <div class="myaccount">

            <h5 class="space">My Account</h5>
            <a href="#">
                <p style="margin-bottom: 4px;">Sign In</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">View Cart</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">My Wishlist</p>
            </a>
            <a href="#">
                <p style="margin-bottom: 4px;">Track My Order</p>
            </a>

        </div>


        <div class="installapp">

            <h5 class="space">Install App</h5>
            <p class="space">From App Store or Google Play</p>

            <div class="googleappstore space">

                <img src="images/appstore.WEBP" class="appstore" width="200px" alt="">
                <img src="images/googeplay.WEBP" class="playstore" width="200px" alt="">

            </div>

            <p class="space">Secured Payment Cateways</p>

            <div class="card-Wrapper">

                <div class="visa">

                    <img src="images/visa.WEBP" width="100px" alt="">

                </div>

                <div class="master-card">

                    <img src="images/mastercard.WEBP" width="100px" alt="">

                </div>

                <div class="mastero">

                    <img src="images/Maestro.WEBP" width="100px" alt="">

                </div>

            </div>

        </div>

    </div>

</footer>


</body>

</html>