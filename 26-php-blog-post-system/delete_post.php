<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Check if ID is provided
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Step 3: Run delete query
    $sql = "DELETE FROM posts WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Post deleted successfully! <a href='view_posts.php'>View All Posts</a>";
    } else {
        echo "Error deleting post: " . mysqli_error($conn);
    }
} else {
    echo "Invalid post ID.";
}

// Step 4: Close connection
mysqli_close($conn);
?>
