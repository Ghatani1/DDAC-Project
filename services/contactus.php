<?php
// Database connection code
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = ""; 
$dbname = "logreg";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$con) {
    die("failed to connect!");
}

// Form submission code
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Insert data into database
    $query = "INSERT INTO contactus (user, email, message) VALUES ('$user', '$email', '$message')";
    
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "MESSAGE IS SENT";
    }else {
            echo "Error: " . mysqli_error($con);
        }
    }


// Close database connection
mysqli_close($con);
?>