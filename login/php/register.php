<?php

date_default_timezone_set('Asia/Karachi');

//Database Connection
$host = "localhost";
$user = "root";
$password = "";
$db = "portfolio";

$conn = mysqli_connect($host, $user, $password, $db);

if(!$conn) {
    die("Connection Failed");
} else {
    echo "Database Connected Successfully...";
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = date('Y-m-d H:i:s');

$query = "INSERT INTO users(username, email, password, created_date) VALUES('$username', '$email', '$password', '$date')";
$result = mysqli_query($conn, $query);

if($result) {
    header('Location: ../index.php');
} else {
    echo "Something went wrong...";
}