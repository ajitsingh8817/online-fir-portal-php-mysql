<?php
include 'db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Welcome Admin: <?php echo $_SESSION['username']; ?></h2>
    <h3>FIR Records</h3>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Complaint</th>
            <th>Status</th>
            <th>Update</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM firs");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['complaint']}</td>
                <td>{$row['status']}</td>
                <td><a href='update_status.php?id={$row['id']}'>Update</a></td>
              </tr>";
        }
        ?>
    </table>
    <br><a href="logout.php">Logout</a>
</body>
</html>
