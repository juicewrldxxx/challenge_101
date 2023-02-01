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
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database for the user
 $sql = "INSERT INTO loginn (username, password) VALUES ('{$username}', '{$password}') ";
 $result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: LoginSignUp.php');
  } else {
    // Show an error message
    echo "Login failed. Please try again.";
  }

 // Close the connection
 mysqli_close($conn);
?>