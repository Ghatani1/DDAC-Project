<?php
session_start();


include("connection.php");
include("function.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



</head>

<body>


    <?php include("head-foot/header.php")?>

    <!----------------------- Carousel_Slider --------------------->

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="8000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/water2.jpg" class="d-block" width="100%" height="700px" object-fit="cover"
                    alt="picture of water">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>First slide label</h5> -->
                    <p style="font-weight:500; font: size 1rem; color:#f9f9f9f9;">Save water from pollution and gift it
                        to
                        next generation.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/water3.jpg" class="d-block" width="100%" height="700px" object-fit="cover"
                    alt="picture of water">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5> -->
                    <p style="font-weight:500; font: size 1rem; color:#f9f9f9f9;">From Source to Tap: Ensuring Every
                        Drop is
                        Pure.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/water4.jpg" class="d-block" width="100%" height="700px" object-fit="cover"
                    alt="picture of water">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5> -->
                    <p style="font-weight:500; font: size 1rem; color:#f9f9f9f9;">Sustaining Life, One Drop at a Time.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/water5.jpg" class="d-block" width="100%" height="700px" object-fit="cover"
                    alt="picture of water">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5> -->
                    <p style="font-weight:500; font: size 1rem; color:#f9f9f9f9;">No water, no life. No blue, no green.
                        Hold
                        your grip and
                        stop that drip.</p>
                </div>
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1" style="background-color: #ffffff;"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"
                style="background-color: #ffffff;"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"
                style="background-color: #ffffff;"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"
                style="background-color: #ffffff;"></button>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!----------------------- About us -------------------->
    <div id="about_us" class="heading">
        <h2>About Us</h2>
    </div>
    <div class="about-section">
        <div class="about-content">
            <div class="card-image">
                <img src="image/mission.png" alt="Image 1">
                <div class="card-content">
                    <h3>Our Mission</h3>
                    <p>We strive to make the world a better place by providing clean water solutions to communities in
                        need.</p>
                </div>
            </div>
            <div class="card-image">
                <img src="image/vision.png" alt="Image 2">
                <div class="card-content">
                    <h3>Our Vision</h3>
                    <p>To create a world where every individual has access to safe and clean drinking water.</p>
                </div>
            </div>
            <div class="card-image">
                <img src="image/values.png" alt="Image 3">
                <div class="card-content">
                    <h3>Our Values</h3>
                    <p>We are committed to integrity, sustainability, and making a positive impact on the environment.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- -------------Our Services----------------- -->


    <div class="heading">
        <h2>Our Services</h2>
    </div>

    <div class="wrapper">
        <div class="card">
            <img src="image/donation.jpg" alt="umage of donation">
            <div class="info">
                <h5>Donation</h5>
                <p>Donate today, save lives tomorrow</p>
                <a href="#" class="btn">Donate</a>
            </div>
        </div>

        <div class="card">
            <img src="image/report.jpg" alt="umage of donation">
            <div class="info">
                <h5>Report</h5>
                <p>Donate to Support life</p>
                <a href="features/report.php" class="btn">Report</a>
            </div>
        </div>

        <div class="card">
            <img src="image/booking.jpg" alt="umage of donation">
            <div class="info">
                <h5>Booking</h5>
                <p>Donate to Support life</p>
                <a href="features/booking.php" class="btn">Booking</a>
            </div>
        </div>

        <div class="card">
            <img src="image/Request.jpg" alt="umage of donation">
            <div class="info">
                <h5>Request</h5>
                <p>Save water, and it will save you.</p>
                <a href="features/request.php" class="btn">Request</a>
            </div>
        </div>
    </div>


    <!------------- Contact Us ------------------>
    <div class="heading">
        <h2>Contact Us</h2>
    </div>

    <div class="contact ">
        <div class="contact-content row ">
            <div class="contact-image col-6">
                <img src="image/contact.jpg" alt="Tilted Image">
            </div>
            <div class="col-6">
                <form action="services/contactus.php" method="post">
                    <div class="form-fields">
                        <input type="text" name="user" placeholder="Your Full Name" />
                        <input type="email" name="email" placeholder="Your E-Mail" />
                        <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
                    </div>
                    <button class="main-btn contact-btn" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function showMessage(message) {
        alert(message);
    }
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        fetch(this.action, {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => {
                if (response.ok) {
                    showMessage('Message is sent');
                } else {
                    showMessage('Error: Unable to send message');
                }
            })
            .catch(error => {
                showMessage('Error: ' + error.message);
            });
    });
    </script>
    <!----------------------- Footer --------------------->

    <?php include("head-foot/footer.php")?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>