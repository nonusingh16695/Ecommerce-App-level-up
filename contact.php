<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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
    

<!-- header part contact-->

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
            <li><a href="contact.php" class="menus-link active">Contact</a></li>
            <a href="http://localhost/php/levelup/singleproduct.php"><i class="ri-shopping-bag-line shopping-bag"></i></a>

        </ul>
    </nav>

</header>


<!-- contact coupon part -->

<div class="coupon">

    <h3 style="font-family: paragraph;">#Contact</h3>
    <p style="font-family: light;font-size:15px; ">LEAVE A MESSAGE, WE LOVE TO HEAR FROM YOU!</p>

</div>

<!-- contact-details part -->

<section class="contact-details">

    <div class="details">

        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency locations or contact us today</h2>
        <h3>Head Office</h3>

        <div>
            <li>
                <i class="ri-global-line"></i>
                <p>56 Glassford Street Glasgow GI IUL New York</p>
            </li>

            <li>
                <i class="ri-mail-line"></i>
                <p>contact@example.com</p>
            </li>

            <li>
                <i class="ri-phone-line"></i>
                <p>contact@example.com</p>
            </li>

            <li>
                <i class="ri-time-line"></i>
                <p>Monday to Saturday: 9.00am to 16.pm</p>
            </li>
        </div>
    </div>


    <div class="map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.58519770164!2d-0.26640536801903636!3d51.52852620065825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1704134703456!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>

</section>

<!-- form detail section -->

<section class="form-details">


<form action="php/insert.php">

<?php

// url me success aaye to alert print hoga isset means ki ya ho to kya hoga ki if ma jo lekha hoga vahi hoga 
    
    if(isset($_GET['success'])){
        echo "<div class='alert'>Success<i class='ri-check-fill'></i></div>";
        }
    
    ?>

    <span>LEAVE A MESSAGE</span>
    <h2>We love to hear from you</h2>
    <input type="text" placeholder="Your Name" name="username">
    <input type="text" placeholder="Email" name="useremail">
    <input type="text" placeholder="Subject" name="usersubject">
    <textarea name="usermessage" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
    <button class="form-btn" value="submit" name="btn">Submit</button>

</form>

<div class="people">

    <div>
        <img src="images/ratingimage.webp " alt="">
        <p><span>John Doe</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.co</p>
    </div>

    <div>
        <img src="images/ratingimage2.webp" alt="">
        <p><span>William Smith</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.co</p>
    </div>

    <div>
        <img src="images/ratingimage3.webp" alt="">
        <p><span>Emma Stone</span>Senior Marketing Manager <br> Phone: + 000 123 000 77 88 <br> Email: contact@example.co</p>
    </div>

</div>

</section>

<!-- sign up input part -->

<div class="discount-add-and">

<div class="discount-text">

    <h3 style="font-size: 45px; font-family: paragraph;">Sign Up For Newsletters</h3>
    <p style="font-size: 20px; font-family: light;">Get E-mail updates about our latest shop and <span
            style="color: #f15a4b;">special offers.</span></p>

</div>

<form method="GET" action="http://localhost/php/levelup/contact.php">

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