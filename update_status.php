<?php
include 'db.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update FIR Status</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Update FIR Status</h2>
    <form action="process_update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Closed">Closed</option>
        </select><br><br>
        <button type="submit">Update Status</button>
    </form>
</body>
</html>
