<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Handle form submission
if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if (mysqli_query($conn, $sql)) {
        echo "Post created successfully! <a href='view_posts.php'>View All Posts</a>";
    } else {
        echo "Error creating post: " . mysqli_error($conn);
    }
}

// Step 3: Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
</head>
<body>

<h2>Create New Blog Post</h2>

<form method="POST" action="">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="6" cols="40" required></textarea><br><br>

    <button type="submit" name="submit">Create Post</button>
</form>

</body>
</html>
