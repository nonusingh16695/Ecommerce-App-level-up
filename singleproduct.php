<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingleProduct</title>
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

    <!-- header part singleproduct-->

    <header>

        <nav class="navbar">

            <div class="logo">
                <a href="http://localhost/php/levelup/index.php"><img src="images/level-up.WEBP" alt=""></a>
            </div>

            <ul class="menus">

                <li><a href="index.php" class="menus-link">Home</a></li>
                <li><a href="men.php" class=" menus-link">Men</a></li>
                <li><a href="women.php" class="menus-link">Women</a></li>
                <li><a href="kids.php" class="menus-link">Kids</a></li>
                <!-- <li><a href="#" class="menus-link">About</a></li> -->
                <li><a href="contact.php" class="menus-link">Contact</a></li>
                <i class=" active ri-shopping-bag-line shopping-bag"></i>

            </ul>

        </nav>

    </header>


    <!-- single product detail page -->

        <div class="singleproduct-wrapper">

            <section class="pdetail-left">
    
                <div class="main-image">
    
                    <img src="images/main.WEBP" width="100%" id="MainImg" alt="">
    
                    <div class="small-img-group">
    
                        <div class="small-img-wrapper">
    
                            <img src="images/main.WEBP" width="100%" class="small-img" alt="">
    
                        </div>
    
                        <div class="small-img-wrapper">
    
                            <img src="images/small1.WEBP" width="100%" class="small-img" alt="">
    
                        </div>
    
                        <div class="small-img-wrapper">
    
                            <img src="images/small2.WEBP" width="100%" class="small-img" alt="">
    
                        </div>
    
                        <div class="small-img-wrapper">
    
                            <img src="images/small3.WEBP" width="100%" class="small-img" alt="">
    
                        </div>
    
                    </div>
    
                </div>
    
                <div class="pdetail-right">
    
                    <h6>Home / T-Shirt</h6>
                    <h4>Women's Fashion T Shirt</h4>
                    <h2>$139.00</h2>
                    <select>
    
                        <option value="">Select Size</option>
                        <option value="">XL</option>
                        <option value="">XXL</option>
                        <option value="">Small</option>
                        <option value="">Large</option>
                    </select>
    
                    <input type="number" value="1">
                    <button>Add To Cart</button>
                    <h4>Product Details</h4>
                    <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per
                        sq. yd. fabric constructed from 100% cotton. this classic fit preshrunk
                        jersey knit provides unmatched comfort with each wear. Featuring a
                        taped neck and shoulder, and a seamless double-needle collar, and
                        available in a range of colors, it offers it all in the ultimate head-
                        turnina packaae.</span>
    
                </div>
    
        
    
        </section>

    </div>
    
    <div class="products">

        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>

    </div>


    <!-- singleproduct Card Start-->

    <?php


        require("php/connection.php");

        // $productid = $_GET['productid'] ;
        $selectquery = "SELECT * FROM singleproduct  ";
        $result = mysqli_query($conn , $selectquery);



    ?>

    <div class="card-wrapper">

        <?php

             while($output = mysqli_fetch_assoc($result)){

        ?>

        <div class="card">

                <div class="card-img">
                    <img src="<?php echo $output["product_image"] ?>" alt="">
                </div>

            <div class="card-body">

                <p class="sub" name="hooddie">
                    <?php echo $output["product_name"] ?>
                </p>

                <h2 class="card-heading" name="description">
                    <?php echo $output["product_description"] ?>
                </h2>

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

<!-- singleproduct card End-->


    <!-- sign up input part -->

    <div class="discount-add-and">

        <div class="discount-text">

            <h3 style="font-size: 45px; font-family: paragraph;">Sign Up For Newsletters</h3>
            <p style="font-size: 20px; font-family: light;">Get E-mail updates about our latest shop and <span
                    style="color: #f15a4b;">special offers.</span></p>

        </div>

    <form method="GET" action="http://localhost/php/levelup/singleproduct.php">

        <div class="discount-input">

            <input type="text" placeholder="Your email address" name="newsletter">
            <button name="Signup" style="font-family: paragraph; color: white;">Sign-Up</button>

        </div>

    </form>

    </div>

    <!-- singleproduct footer Part -->

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

   
    <script>
        const MainImg = document.getElementById("MainImg");

        const smallImages = document.querySelectorAll('.small-img') ;

      smallImages.forEach(element => {
        element.addEventListener('click', e => {
            let clickedImg = e.target.src ;
            MainImg.src = clickedImg ;
        })
      });

    </script>

</body>

</html>