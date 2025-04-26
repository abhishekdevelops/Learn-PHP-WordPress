<?php
// Name of the file we want to create/write
$filename = "sample.txt";

// Content we want to write into the file
$content = "Hello, this is my first file writing project in PHP!\nLearning file handling step by step.";

// Use file_put_contents() to write content to the file
if (file_put_contents($filename, $content)) {
    echo "✅ File '$filename' created and written successfully!";
} else {
    echo "❌ Failed to write to the file.";
}

// Existing code - file writing
$filename = "sample.txt";
$content = "Hello, this is my first file writing project in PHP!\nLearning file handling step by step.";

if (file_put_contents($filename, $content)) {
    echo "✅ File '$filename' created and written successfully!<br><br>";
} else {
    echo "❌ Failed to write to the file.<br><br>";
}

// New Code - file reading
// Check if file exists before reading
if (file_exists($filename)) {
    $readContent = file_get_contents($filename);
    echo "<h3>Reading File Content:</h3>";
    echo "<pre>$readContent</pre>"; // <pre> for proper formatting
} else {
    echo "❌ File does not exist. Cannot read content.";
}

?>
