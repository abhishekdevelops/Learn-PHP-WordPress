<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>

<?php
// Initialize variables
$name = $email = $message = "";
$nameError = $emailError = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check Name
    if (empty($_POST["name"])) {
        $nameError = "Name is required.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Check Email
if (empty($_POST["email"])) {
    $emailError = "Email is required.";
} else {
    $email = htmlspecialchars($_POST["email"]);
    
    // Validate Email Format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    }
}


    // Get Message (optional)
    if (!empty($_POST["message"])) {
        $message = htmlspecialchars($_POST["message"]);
    }
}
?>

<h2>Contact Us</h2>

<form method="POST" action="">

<label for="name">Name:</label><br>
<input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
<span style="color:red;"><?php echo $nameError; ?></span><br><br>

<label for="email">Email:</label><br>
<input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
<span style="color:red;"><?php echo $emailError; ?></span><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameError) && empty($emailError)) {
    echo "<p style='color:green;'>✅ Thank you, your message has been sent successfully!</p>";
}
?>

</body>
</html>
