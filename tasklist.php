<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'lab101';
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$taskname = $_POST['taskname'];

$sql = "INSERT INTO tasks (taskname) VALUES ('{$taskname}') ";
// Query the database for the user
$result = mysqli_query($conn, $sql);
header('Location: Task.php');
?>