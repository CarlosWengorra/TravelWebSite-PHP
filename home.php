<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header Section Starts -->
    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- Header Section Ends -->

    <!-- Home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url('src/img/home 1.jpg') no-repeat; background-size: cover;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url('src/img/home 2.jpg') no-repeat; background-size: cover;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url('src/img/home 3.jpg') no-repeat; background-size: cover;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <a href="package.php" class="btn">Discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Home section ends -->

    <!--Services Section Starts -->
    <section class="services">
        <h1 class="heading-title"> Our services </h1>
        <div class="box-container">

            <div class="box">
                <img src="src/img/montana.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="src/img/mapa1.png" alt="">
                <h3>Tour guide</h3>
            </div>

            <div class="box">
                <img src="src/img/mochila.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="src/img/fuego.png" alt="">
                <h3>Camp fire</h3>
            </div>

            <div class="box">
                <img src="src/img/cartel.png" alt="">
                <h3>Off road</h3>
            </div>

            <div class="box">
                <img src="src/img/carpa.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!--Services Section Ends -->

    <!-- Home about section starts-->
    <section class="home-about">

        <div class="image">
            <img src="src/img/aboutus2.jpg" alt="">
        </div>

        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore, facilis! Eaque, magnam ipsa necessitatibus animi vitae quas blanditiis, doloremque fuga ipsam excepturi facilis deserunt illum nobis suscipit similique voluptas ducimus!</p>
            <a href="about.php" class="btn">Read more</a>
        </div>

    </section>

    <!-- Home about section ends-->

    <!-- Home packages section starts-->
    <section class="home-packages">

        <h1 class="heading-title">Out packages</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="src/img/header 1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, in?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="src/img/header 2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, in?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="src/img/header 3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, in?</p>
                    <a href="book.php" class="btn">Book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"> <a href="package.php" class="btn">Load more</a> </div>
    </section>
    <!-- Home packages section ends-->

    <!-- Home offer section starts-->

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum nemo debitis explicabo quidem blanditiis voluptatibus? Impedit ipsum aut cum minima.</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>

    <!-- Home offer section ends-->












    <!--Footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-436-7770 </a>
                <a href="#"> <i class="fas fa-envelope"></i> example@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Mendoza, Argentina-#5505 </a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-github"></i> Github</a>
                <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
            </div>

        </div>

        <div class="credit">Created by <span>Wengorra Carlos Web Designer</span> | all rights reserved! </div>
    </section>
    <!--Footer section ends -->


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="script.js"></script>

</body>

</html>