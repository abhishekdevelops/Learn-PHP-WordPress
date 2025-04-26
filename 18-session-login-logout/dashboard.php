<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

<p>This is your dashboard page. Only logged-in users can access this page.</p>

<a href="logout.php">Logout</a>

</body>
</html>
