<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level Up | Home</title>

    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">

    <!-- remixicon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Javascript AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>


    <!-- home header part -->

    <header>

        <nav class="navbar">

            <div class="logo">
                <a href="http://localhost/php/levelup/index.php"><img src="images/level-up.jpg" alt=""></a>
            </div>

            <ul class="menus">
                <li><a class=" menus-link active" href="index.php">Home</a></li>
                <li><a href="./men.php" class="menus-link">Men</a></li>
                <li><a href="women.php" class="menus-link">Women</a></li>
                <li><a href="kids.php" class="menus-link">Kids</a></li>
                <!-- <li><a href="#" class="menus-link">About</a></li> -->
                <li><a href="contact.php" class="menus-link">Contact</a></li>
                <a href="http://localhost/php/levelup/singleproduct.php"><i class="ri-shopping-bag-line shopping-bag"></i></a>

            </ul>

        </nav>

    </header>



    <div class="content-wrapper">

        <div class="left-text" data-aos="slide-right" data-aos-duration="1000">

            <h1>Next-Level Shopping,<br> <span>Elevate Your Experience</span></h1>

            <p class="offer" style="font-family: light;">Save more with coupons & up to 70% off!</p>

            <a href="#"> <button style="font-family: heading; background: none;" class="button-48" role="button"><span
                        class="text">Shop Now</span></button></a>


        </div>

        <div class="right-image">

            <div class="inner-right-image" data-aos="slide-left" data-aos-duration="1000">

                <img src="images/main.png" alt="">

            </div>

        </div>

    </div>

    <div class="products">

        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>

    </div>


<!-- Home Card Start-->

    <?php
    require("php/connection.php");

        $selectquery = "SELECT * FROM home_products";
        $result = mysqli_query($conn , $selectquery);

    ?>
<div class="container">
    
        <div class="card-wrapper">
    
            <?php
    
                 while($output = mysqli_fetch_assoc($result)){
    
            ?>
    
            <div class="card" onclick="window.location.href='singleproduct.php';">
    
                    <div class="card-img">
                        <img src="<?php echo $output["product_image"] ?>" alt="">
                    </div>
    
                <div class="card-body">
    
                <h2 class="sub" name="hooddie">
                <?php echo $output["product_name"] ?>
                </h2>
    
                <p class="card-heading" name="description">
                <?php echo $output["product_description"] ?>
                </p>
    
                    <div class="stars">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
    
                        <p class="price" name="price">
                            <?php echo $output["product_price"] ?>
                        </p>
                    
                        <div class="icon">
                            <?php echo $output["cart_icon"] ?>
                        </div>

                </div><!--card-body end-->
    
            </div><!--card end-->
    
    
    
            <?php
    
            }
    
            ?>
    
        </div> <!--card-wrapper end-->
</div>

<!-- Home card End-->
    
    <div class="discount-add">

        <h3 style="font-family: paragraph; text-transform: uppercase;">Up to <span style="color: #f15a4b;">70%
                Off</span> - All t-Shirts & Accessories</h3>
        <a href="#"><button style="font-family: paragraph;">Explore More</button></a>

    </div>


    <div class="products">

        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>

    </div>
    <!-- Home bottom card Start-->

    <?php


    require("php/connection.php");

    $selectquery = "SELECT * FROM  home_bottom";
    $result = mysqli_query($conn , $selectquery);



    ?>

<div class="container">
    
    <div class="card-wrapper">

        <?php

             while($output = mysqli_fetch_assoc($result)){

        ?>

        <div class="card" onclick="window.location.href='singleproduct.php';">

                <div class="card-img">
                    <img src="<?php echo $output["product_image"] ?>" alt="">
                </div>

            <div class="card-body">

            <h2 class="sub" name="hooddie">
            <?php echo $output["product_name"] ?>
            </h2>

            <p class="card-heading" name="description">
            <?php echo $output["product_description"] ?>
            </p>

                <div class="stars">
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                    <i class="ri-star-fill"></i>
                </div>

                    <p class="price" name="price">
                        <?php echo $output["product_price"] ?>
                    </p>
                
                    <div class="icon">
                        <?php echo $output["cart_icon"] ?>
                    </div>

            </div><!--card-body end-->

        </div><!--card end-->



        <?php

        }

        ?>

    </div> <!--card-wrapper end-->
</div>


      <!-- Home bottom card End-->
    

    <div class="deals-wrapper">

        <div class="crazy-deals">

            <p>crazy deals</p>
            <h3>buy 1 get 1 free</h3>
            <p>The best classic deals on sale on Level-up</p>
            <a href="#"><button style="font-family: paragraph;">Learn More</button></a>

        </div>

        <div class="spring-summer">

            <p>summer</p>
            <h3>Upcoming season</h3>
            <p>The best classic deals on sale on Level-up</p>
            <a href="#"><button style="font-family: paragraph;">Collection</button></a>

        </div>

    </div>

    <div class="sale-wrapper">

        <div class="sale1">
            <h3>SEASONAL SALE</h3>
            <p>Winter Collection - 50% Off</p>
        </div>
        <div class="sale2">
            <h3>NEW FOOTWEAR COLLECTION</h3>
            <p>Spring / Summer 2023</p>
        </div>
        <div class="sale3">
            <h3>T-SHIRTS</h3>
            <p>New Trendy Prints</p>
        </div>

    </div>

    <!-- sign up input part -->

    <div class="discount-add-and">

        <div class="discount-text">

            <h3 style="font-size: 45px; font-family: paragraph;">Sign Up For Newsletters</h3>
            <p style="font-size: 20px; font-family: light;">Get E-mail updates about our latest shop and <span
                    style="color: #f15a4b;">special offers.</span></p>

        </div>

    <form method="GET" action="http://localhost/php/levelup/index.php">

        <div class="discount-input">

            <input type="text" placeholder="Your email address" name="newsletter">
            <button name="Signup" style="font-family: paragraph; color: white;">Sign-Up</button>

        </div>

    </form>

    </div>

    <!-- footer Part -->

    <footer>

        <div class="footer-wrapper">

            <div class="footer-flex">

                <div class="level-up">

                    <div class="level-logo space">

                        <img src="images/level-up.jpg" width="100px" alt="">

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

                        <img src="images/appstore.png" class="appstore" width="200px" alt="">
                        <img src="images/googeplay.png" class="playstore" width="200px" alt="">

                    </div>

                    <p class="space">Secured Payment Cateways</p>

                    <div class="card-Wrapper">

                        <div class="visa">

                            <img src="images/visa.jpg" width="100px" alt="">

                        </div>

                        <div class="master-card">

                            <img src="images/mastercard.jpg" width="100px" alt="">

                        </div>

                        <div class="mastero">

                            <img src="images/Maestro.jpg" width="100px" alt="">

                        </div>

                    </div>

                </div>

            </div>

    </footer>

    </div>

    <p style="font-family: light;" class="copyright"> &copy; 2021. Tech2 etc - HTML CSS Ecommerce Template</p>

    <!-- Javascript AOS Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Javascript AOS Script in this init function we can change transition-duration: 4000ms; etc-->
    <script>
        AOS.init();
    </script>

</body>

</html>