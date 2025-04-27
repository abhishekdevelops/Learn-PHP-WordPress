<?php
// Database configuration
$servername = "localhost"; // Since we are running locally
$username = "root";         // Default username for XAMPP
$password = "";             // No password in XAMPP by default
$database = "learning_php"; // Database you created

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully to the database!";
?>
