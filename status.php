<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Check FIR Status</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Check FIR Status</h2>
    <form method="GET">
        <input type="text" name="fir_id" placeholder="Enter FIR ID" required><br><br>
        <button type="submit">Check Status</button>
    </form>

    <?php
    if (isset($_GET['fir_id'])) {
        $fir_id = $_GET['fir_id'];
        $query = "SELECT * FROM firs WHERE id=$fir_id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            echo "<h3>Status: " . $row['status'] . "</h3>";
        } else {
            echo "Invalid FIR ID!";
        }
    }
    ?>
    <a href="index.php">Back to Home</a>
</body>
</html>
