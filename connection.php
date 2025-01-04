<?php

$servername = "localhost";
$username = "root"; // Specify your username
$password = ""; // Specify your password
$database = "smc";

session_start();
//create connection

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "failed to connect!";
    exit();
}
?>