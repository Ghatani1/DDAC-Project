<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_name = $_POST['user_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($user_name) || empty($phone_number) || empty($email) || empty($password)) {
        echo "Please fill in all fields";
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address";
        exit;
    }

    if (strlen($phone_number) !== 10) {
        echo "Phone number should be exactly 10 digits";
        exit; 
    }

    if (strlen($password) < 8) {
        echo "Password should be at least 8 characters long";
        exit;
    }

    $existing_user_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $existing_user_query);
    if(mysqli_num_rows($result) > 0) {
        echo "This email is already registered";
        exit;
    }

 
    $user_id = random_num(20);
    $query = "INSERT INTO users (user_id, user_name, password, phone_number, email) VALUES ('$user_id', '$user_name', '$password', '$phone_number', '$email')";

    mysqli_query($con, $query);
    header("Location: login.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <style type="text/css">
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url('image/water.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    #overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.4);
    }

    #box {
        background-color: transparent;
        width: 300px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.4);
    }

    #text {
        height: 40px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
        box-sizing: border-box;
    }

    #button {
        padding: 10px;
        width: 100%;
        color: white;
        background-color: lightblue;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #button:hover {
        background-color: #0066ff;
    }

    a {
        color: white;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>

    <div id="box">
        <form class="" method="post">
            <div style="font-size: 30px; margin: 10px; color:#000; font-weight:bolder;">Sign Up</div><br><br>
            <input required id="text" type="text" name="user_name" placeholder="Username"><br><br><br>
            <input required id="text" type="text" name="phone_number" placeholder="Phonenumber"><br><br><br>
            <input required id="text" type="email" name="email" placeholder="Email"><br><br><br>
            <input required id="text" type="password" name="password" placeholder="Password">
            <br><br><br>
            <input required style="border-radius: 10px; background-color: black; color:white; font-weight:bold;"
                id="button" type="submit" value="Sign Up"><br><br><br>
            <a style="color: #fff; font-weight: bold;" href="login.php">Already have an account? Login</a><br><br><br>
        </form>
    </div>
</body>

</html>