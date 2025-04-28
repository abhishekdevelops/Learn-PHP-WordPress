<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Initialize empty variables
$search = "";
$results = [];

// Step 3: Check if form is submitted
if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);

    // Step 4: Build search query
    $sql = "SELECT * FROM users 
            WHERE name LIKE '%$search%' OR email LIKE '%$search%'";

    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $results[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Users</title>
</head>
<body>

<h2>Search Users</h2>

<form method="POST" action="">
    <input type="text" name="search" placeholder="Enter Name or Email" required>
    <button type="submit" name="submit">Search</button>
</form>

<?php if (isset($_POST['submit'])): ?>

    <h3>Search Results for "<?php echo htmlspecialchars($search); ?>"</h3>

    <?php if (!empty($results)): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php foreach ($results as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No results found.</p>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>

<?php
// Step 5: Close connection
mysqli_close($conn);
?>
