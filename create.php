create.php

<?php
include 'db_connect.php';

$username = $_POST['username'];
$password  = $_POST['password'];

$sql = "INSERT INTO user (username, password)
        VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    return header("Location: index.php" . "?success=1");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>