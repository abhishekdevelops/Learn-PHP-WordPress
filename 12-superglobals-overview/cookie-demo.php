<?php
// cookie-demo.php – Demonstration of $_COOKIE

// Step 1: Set a cookie (expires in 1 hour)
$cookieName = "user";
$cookieValue = "Abhishek";
setcookie($cookieName, $cookieValue, time() + 3600); // 3600 seconds = 1 hour
?>

<h2>PHP Cookie Demo</h2>

<?php
// Step 2: Display the cookie value if it's set
if (isset($_COOKIE[$cookieName])) {
    echo "<p><strong>Cookie Value:</strong> " . $_COOKIE[$cookieName] . "</p>";
} else {
    echo "<p>Cookie is not set yet. Please refresh the page.</p>";
}
?>
