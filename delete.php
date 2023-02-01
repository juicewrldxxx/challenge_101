<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'lab101';
    $conn = mysqli_connect($host, $user, $password, $dbname);

    try {
        mysqli_query($conn, "DELETE FROM tasks WHERE id = '{$_GET['id']}'");
        header('Location: Task.php');
    } catch (Exception $e) {
        echo "Co loi";
    }

?>