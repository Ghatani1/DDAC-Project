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
    // Retrieve form data

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $services = mysqli_real_escape_string($con, $_POST['services']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $agree = mysqli_real_escape_string($con, $_POST['agree']);

    // Insert data into the database
    $query = "INSERT INTO service_requests (username, email, state, city, zip, services, description, agree) 
              VALUES ('$username', '$email', '$state', '$city', '$zip', '$services', '$description', 'agree')";
    
    if (mysqli_query($con, $query)) {
        echo "Request sent successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }

    // Close database connection
    mysqli_close($con);
}
?>