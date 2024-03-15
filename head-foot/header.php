<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
</head>

<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="image/logo2.png" />
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Services</a>
                    <div class="dropdown-content">
                        <a href="#">Donation</a>
                        <a href="features/report.php">Report</a>
                        <a href="#">Booking</a>
                        <a href="features/request.php">Request</a>
                    </div>
                </li>
                <li><a href="#about_us">About</a></li>
                <li><a href="#">Contact</a></li>

                <li class="dropdown">
                    <a href="#" class="dropbtn"><i
                            class="bi bi-person-circle me-2"></i><?php echo $user_data['user_name']; ?></a>
                    <div class="dropdown-content">
                        <a href="#">
                            Profile </a>
                        <a href="logout.php">Log Out</a>
                    </div>
                </li>


                <li><a href="#"></a></li>
            </ul>
        </nav>
    </header>
</body>

</html>