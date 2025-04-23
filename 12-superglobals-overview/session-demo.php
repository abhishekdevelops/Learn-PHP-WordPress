<?php
// session-demo.php – Demonstration of $_SESSION

// Step 1: Start the session (must be at the top before any HTML)
session_start();

// Step 2: Set a session variable if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"])) {
    $_SESSION["username"] = htmlspecialchars($_POST["username"]);
}
?>
<h2>PHP Session Demo</h2>

<!-- Form to store name in session -->
<form method="POST" action="">
  <label for="username">Enter your name:</label><br>
  <input type="text" id="username" name="username" required><br><br>
  <input type="submit" value="Start Session">
</form>

<?php
// Step 3: Display session value if set
if (isset($_SESSION["username"])) {
    echo "<p><strong>Session Username:</strong> " . $_SESSION["username"] . "</p>";
}
?>

