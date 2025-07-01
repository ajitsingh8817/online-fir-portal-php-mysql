<?php
include 'db.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$complaint = $_POST['complaint'];

$query = "INSERT INTO firs (name, contact, email, complaint, status) VALUES ('$name', '$contact', '$email', '$complaint', 'Pending')";

if (mysqli_query($conn, $query)) {
    $fir_id = mysqli_insert_id($conn);
    echo "FIR Registered Successfully! Your FIR ID is: " . $fir_id;
    echo "<br><a href='index.php'>Back to Home</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
