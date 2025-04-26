<?php
// Turn on error reporting for visibility
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 1. Include header (file exists)
include("header.php");

// 2. Include non-existent file (will show a warning, but continue)
include("missingfile.php");

// 3. Require footer (file exists)
require("footer.php");

// 4. Try to require a non-existent file (will throw fatal error and stop script)
// require("doesnotexist.php"); // Uncomment to test behavior
?>
