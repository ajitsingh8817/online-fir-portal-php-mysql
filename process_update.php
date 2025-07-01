<?php
include 'db.php';

$id = $_POST['id'];
$status = $_POST['status'];

$query = "UPDATE firs SET status='$status' WHERE id=$id";
if (mysqli_query($conn, $query)) {
    header('Location: admin.php');
} else {
    echo "Error updating status.";
}
?>
