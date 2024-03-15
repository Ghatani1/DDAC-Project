<?php
session_start();

include("connection.php");
include("function.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Please enter a valid email address";
                exit;
            }
            $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
            $result = mysqli_query($con, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    exit;
                } else {
                    echo "Wrong password";
                    exit;
                }
            } else {
                echo "Email not found";
                exit;
            }
        } else {
            echo "Please fill in all fields";
            exit;
        }
    } else {
        echo "Please fill in all fields";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form method="post">
            <div style="font-size: 30px; margin: 10px; color:#000; font-weight: bolder;">Login</div><br><br>
            <input required id="text" type="email" name="email" placeholder="Email"><br><br><br>
            <input id="text" type="password" name="password" placeholder="Password"><br><br><br>
            <input style="border-radius: 10px; background-color: black; color:white; font-weight:bold;" id="button"
                type="submit" value="Login"><br><br><br>
            <a style="color: #fff; font-weight:bold;" href="signup.php">Don't have an account? Signup</a><br><br><br>
        </form>
    </div>

</body>

</html>