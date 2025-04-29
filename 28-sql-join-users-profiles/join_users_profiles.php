<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Join query
$sql = "SELECT users.id, users.name, users.email, user_profiles.bio, user_profiles.address
        FROM users
        INNER JOIN user_profiles ON users.id = user_profiles.user_id";

$query = mysqli_query($conn, $sql);

$users_profiles = [];

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $users_profiles[] = $row;
    }
}

// Step 3: Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Users with Profiles (JOIN)</title>
</head>
<body>

<h2>Users and Their Profiles</h2>

<?php if (!empty($users_profiles)): ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Address</th>
        </tr>

        <?php foreach ($users_profiles as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
                <td><?php echo htmlspecialchars($user['bio']); ?></td>
                <td><?php echo htmlspecialchars($user['address']); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
<?php else: ?>
    <p>No user profiles found.</p>
<?php endif; ?>

</body>
</html>
