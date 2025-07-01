<?php
$conn = mysqli_connect('localhost', 'root', '', 'fir_portal');
if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
