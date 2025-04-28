<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Handle update form submission
if (isset($_POST['update'])) {
    $id = (int) $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    // Step 3: Update query
    $sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Post updated successfully! <a href='view_posts.php'>View All Posts</a>";
    } else {
        echo "Error updating post: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Step 4: Close connection
mysqli_close($conn);
?>
