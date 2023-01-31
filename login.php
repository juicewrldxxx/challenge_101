<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '123@123a';
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
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Check if the user exists
if (mysqli_num_rows($result) > 0) {
    // Log the user in
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header('Location: Task.php');
} else {
    // Show an error message
    echo "Login failed. Please try again.";
}

// Close the connection
mysqli_close($conn);
?>