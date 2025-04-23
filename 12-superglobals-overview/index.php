<?php
// Superglobals Demo – Display server and request info

// Step 1: Get the request method (GET or POST)
$requestMethod = $_SERVER["REQUEST_METHOD"];

// Step 2: Get the current file path
$currentFile = $_SERVER["PHP_SELF"];

// Step 3: Get the browser user agent
$browserInfo = $_SERVER["HTTP_USER_AGENT"];

// Step 4: Check if GET parameter "source" is set
$source = isset($_GET["source"]) ? htmlspecialchars($_GET["source"]) : "Not provided";
?>

<h2>Superglobals Overview</h2>

<p><strong>Request Method:</strong> <?php echo $requestMethod; ?></p>
<p><strong>Current File:</strong> <?php echo $currentFile; ?></p>
<p><strong>Your Browser:</strong> <?php echo $browserInfo; ?></p>
<p><strong>GET Parameter 'source':</strong> <?php echo $source; ?></p>

<!-- Example GET link -->
<p><a href="?source=github">Visit with GET parameter: ?source=github</a></p>

<hr>
<h3>POST Form Example</h3>

<form method="POST" action="">
  <label for="username">Enter your name:</label><br>
  <input type="text" id="username" name="username" required><br><br>
  <input type="submit" value="Submit">
</form>

<?php
// Handle POST data using $_POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : "Not provided";
    echo "<p><strong>POST - Username:</strong> $username</p>";
}

// Also show it via $_REQUEST (merged GET/POST/COOKIE)
if (isset($_REQUEST["username"])) {
    $requestedName = htmlspecialchars($_REQUEST["username"]);
    echo "<p><strong>REQUEST - Username:</strong> $requestedName</p>";
}
?>
