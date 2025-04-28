<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Check if ID is provided
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid post ID.";
    exit();
}

$id = (int) $_GET['id'];

// Step 3: Fetch post details
$sql = "SELECT * FROM posts WHERE id = $id";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) == 1) {
    $post = mysqli_fetch_assoc($query);
} else {
    echo "Post not found.";
    exit();
}

// Step 4: Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Blog Post</title>
</head>
<body>

<h2>Edit Blog Post</h2>

<form method="POST" action="update_post.php">
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="6" cols="40" required><?php echo htmlspecialchars($post['content']); ?></textarea><br><br>

    <button type="submit" name="update">Update Post</button>
</form>

<br>
<a href="view_posts.php">🔙 Back to All Posts</a>

</body>
</html>
