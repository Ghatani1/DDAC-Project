<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "logreg";


if(!$con= mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("failed to connect!");
}