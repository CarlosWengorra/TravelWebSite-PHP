<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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

    <div class="heading" style="background: url('src/img/header 3.jpg') no-repeat; background-size: cover; background-position: center;">

        <h1>Book now</h1>
    </div>

    <!-- Booking section starts -->

    <section class="booking">
        <h1 class="heading-title">Book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form" >
            <div class="flex">

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter your name" name="name" >
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="Enter your email" name="email" >
                </div>

                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" placeholder="Enter your number" name="phone" >
                </div>

                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter your address" name="address" >
                </div>

                <div class="inputBox">
                    <span>Where to :</span>
                    <input type="text" placeholder="Place you want to visit" name="location" >
                </div>

                <div class="inputBox">
                    <span>How many :</span>
                    <input type="number" placeholder="Number of guests" name="guests" >
                </div>

                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date" name="arrivals" >
                </div>

                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="date" name="leaving" >
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send" >
        </form>
    </section>

    <!-- Booking section ends -->
















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