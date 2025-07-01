<!DOCTYPE html>
<html>
<head>
    <title>Register FIR</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Register FIR</h2>
    <form name="firForm" action="process_register.php" method="POST" onsubmit="return validateFIRForm();">

        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="text" name="contact" placeholder="Contact Number" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <textarea name="complaint" placeholder="Enter Complaint" required></textarea><br><br>
        <button type="submit">Submit FIR</button>

    </form>
    <a href="index.php">Back to Login</a>
     <script src="assets/js/script.js"></script>
    
</body>
</html>
