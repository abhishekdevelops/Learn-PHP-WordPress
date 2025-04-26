<?php
// Start session
session_start();

// Check if form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials
    $valid_username = "admin";
    $valid_password = "password123";

    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST" action="">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="submit">Login</button>
</form>

</body>
</html>
