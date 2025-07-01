<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Online FIR Portal - Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Online FIR Portal</h2>
    <form action="process_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <a href="register.php">Register FIR</a> | <a href="status.php">Check FIR Status</a>
</body>
</html>
