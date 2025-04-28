<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Fetch all posts
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$query = mysqli_query($conn, $sql);

$posts = [];

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $posts[] = $row;
    }
}

// Step 3: Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Blog Posts</title>
</head>
<body>

<h2>All Blog Posts</h2>

<a href="create_post.php">➕ Create New Post</a><br><br>

<?php if (!empty($posts)): ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo htmlspecialchars($post['title']); ?></td>
                <td><?php echo nl2br(htmlspecialchars($post['content'])); ?></td>
                <td><?php echo $post['created_at']; ?></td>
                <td>
                    <a href="edit_post.php?id=<?php echo $post['id']; ?>">Edit</a> |
                    <a href="delete_post.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
<?php else: ?>
    <p>No posts found. <a href="create_post.php">Create one!</a></p>
<?php endif; ?>

</body>
</html>
