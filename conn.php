<?php
$host = 'localhost';
$user = 'root';
$password = '123@123a';
$dbname = 'lab101';

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>