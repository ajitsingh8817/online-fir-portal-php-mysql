<?php
include 'db.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: admin.php');
} else {
    echo "Invalid credentials. <a href='index.php'>Try Again</a>";
}
?>
