<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "logreg";


if(!$con= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("failed to connect!");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $issue = mysqli_real_escape_string($con, $_POST['issue']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $agree = mysqli_real_escape_string($con, $_POST['agree']);
    
    $query = "INSERT INTO service_reports (email, state, city, issue, description, image, agree) 
              VALUES ('$email', '$state', '$city', '$issue', '$description', '$image', '$agree')";
    
    if (mysqli_query($con, $query)) {
        echo "Request sent successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    // Close database connection
    mysqli_close($con);
}

?>