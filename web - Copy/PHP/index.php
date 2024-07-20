<?php
session_start();

include ("connection.php");
include ("function.php");

$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<!--head -->

<head>
    <!--link to the css file-->
    <link rel="stylesheet" href="../CSS/index_style.css" />

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--title name-->
    <title>techShop</title>
</head>


<!--body begin-->

<body>
    <header>
        <div id="headerParent">
            <!-- the details of the size of this image named log are in css -->
            <img src="../images/R.png" alt="Logo" id="Logo" />
            <p id="indexHeaderText">TechShop</p>

            <div class="logout">
                <p><a href="logout.php">Logout</a></p>
            </div>
        </div>

        <nav id="nav">
            <ul>
                <li><a href="../PHP/index.php">Home</a></li>
                <li><a href="../HTML/contact.html">Contact Us</a></li>
                <li><a href="../HTML/about.html">About</a></li>
                <li><a href="../HTML/payment.html">Payement</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div id="description_div">
            <p id="description_text">
                TechShop is a place where dreams come true, we are more than just a
                store, we are a gateway to innovation. Explore our curated collection
                of state-of-the-art gadgets, sleek wearables, and powerful computing
                devices. Whether you are a seasoned techie or a curious beginner, our
                expertly crafted products will elevate your digital experience.
                Discover the future today!”
            </p>
        </div>
        <div id="products_div">
            <div class="first_line_product_in_div">
                <p id="first_line_product_in_div__p">Check out our products below:</p>
            </div>
            <!--products-->
            <div id="products">
                <!--macbook-->
                <div id="macbook_box">
                    <img src="../images/Apple-MYD92-13.3-inch-MacBook-Pro-M1-Chip-with-Retina-Display-Late-2020-Space-Gray.png"
                        alt="macbook_image" id="macbook_image" />
                    <p id="macbook_text">Macbook<a href="../HTML/macBook.html">More deteails</a></p>
                </div>

                <!--samsung-->
                <div id="samsung_s23_box">
                    <img src="../images/samsung.jpeg" alt="samsung_s23_image" id="samsung_s23_image" />
                    <p id="samsung_s23_text">Samsung S23<a href="../HTML/samsung23.html">More details</a></p>
                </div>

                <!--Smart watch-->
                <div id="smart_watch_box">
                    <img src="../images/watch.webp" alt="smart_watch_image" id="smart_watch_image" />
                    <p id="smart_watch_text">Smart watch<a href="../HTML/watch.html">More details</a></p>
                </div>

                <!--Robotic Dog-->
                <div id="dog_box" href="dog.html">
                    <img src="../images/doggy.jpeg" alt="dog_image" id="dog_image" />
                    <p id="smart_watch_text">Tecno Dynamic 1<a href="../HTML/dog.html">More details</a></p>
                </div>


                <!--nokia-->
                <div id="box_nokia">
                    <img src="../Images/nokia.jpg" alt="nokia_image" id="image_nokia" />
                    <p id="text_nokia">Nokia<a href="../HTML/nokia.html">More details</a></p>
                </div>


                <!--iphone 14-->
                <div id="box_iphone14">
                    <img src="../images/iphone14.jpg" alt="nokia_image" id="image_iphone14" />
                    <p id="text_iphone14">Iphone 14<a href="../HTML/iphone14.html">More details</a></p>
                </div>


                <!--iphone5-->
                <div id="box_iphone5">
                    <img src="../Images/iphon5.jpeg" alt="iphone5_image" id="image_iphone5" />
                    <p id="text_iphone5">Iphone 5<a href="../HTML/iphone5.html">More details</a></p>
                </div>


                <!--samsung ring-->
                <div id="box_ring">
                    <img src="../Images/ring.jpeg" alt="ring_image" id="image_ring" />
                    <p id="text_ring">Samsung ring<a href="../HTML/ring.html">More details</a></p>
                </div>


                <!--samsung galaxy young-->
                <div id="box_samsung_galaxy_young">
                    <img src="../Images/Samsung-Galaxy-Young.jpg" alt="samsung_galaxy_young_image"
                        id="image_samsung_galaxy_young" />
                    <p id="text_samsung_galaxy_young">samsung galaxy young<a
                            href="../HTML/samsung_galaxy_young.html">More
                            details</a></p>
                </div>


                <!--Airpod-->
                <div id="box_air">
                    <img src="../Images/air.jpeg" alt="ring_image" id="image_air" />
                    <p id="text_air">samsung galaxy young<a href="../HTML/air.html">More details</a></p>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div id="footerParent">
            <p id="footertext">&copy; 2024 TechShop. All Rights Reserved</p>
        </div>
    </footer>
</body>
<!--body end-->

</html>