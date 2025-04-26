<?php
// Step 1: Check if the form is submitted
if (isset($_POST['uploadBtn']) && isset($_FILES['uploadedFile'])) {

    // Step 2: Get file info
    $fileName = $_FILES['uploadedFile']['name'];
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileError = $_FILES['uploadedFile']['error'];

    // Set a maximum file size (e.g., 2MB = 2 * 1024 * 1024 bytes)
$maxFileSize = 2 * 1024 * 1024;

if ($fileSize > $maxFileSize) {
    echo "File is too large. Maximum size allowed is 2MB.";
    exit;
}

// Allow only certain file types
$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];

if (!in_array($fileType, $allowedTypes)) {
    echo "Only JPG, PNG images or PDF files are allowed.";
    exit;
}


    // Step 3: Define upload folder
    $uploadFolder = "uploads/";

    // Step 4: Move file if no error
    if ($fileError === 0) {
        $destination = $uploadFolder . basename($fileName);

        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "File uploaded successfully: $fileName";
        } else {
            echo "Error moving the uploaded file.";
        }
    } else {
        echo "File upload error. Code: $fileError";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload in PHP</title>
</head>
<body>

<h2>Upload a File</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="file">Choose a file:</label><br><br>
    <input type="file" name="uploadedFile" id="file" required><br><br>
    <input type="submit" name="uploadBtn" value="Upload">
</form>

</body>
</html>
