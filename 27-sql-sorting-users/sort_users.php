<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Default sorting
$sort_column = "id";
$sort_order = "ASC";

// Step 3: Handle sort links
if (isset($_GET['sort'])) {
    if ($_GET['sort'] == 'name') {
        $sort_column = "name";
    } elseif ($_GET['sort'] == 'email') {
        $sort_column = "email";
    } elseif ($_GET['sort'] == 'age') {
        $sort_column = "age";
    }
}

if (isset($_GET['order']) && $_GET['order'] == 'desc') {
    $sort_order = "DESC";
}

// Step 4: Build SQL query
$sql = "SELECT * FROM users ORDER BY $sort_column $sort_order";
$query = mysqli_query($conn, $sql);

$users = [];

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $users[] = $row;
    }
}

// Step 5: Close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sort Users</title>
</head>
<body>

<h2>Sort Users</h2>

<a href="?sort=name&order=asc">Sort by Name (A-Z)</a> |
<a href="?sort=name&order=desc">Sort by Name (Z-A)</a> |
<a href="?sort=email&order=asc">Sort by Email (A-Z)</a> |
<a href="?sort=email&order=desc">Sort by Email (Z-A)</a> |

<br><br>

<?php if (!empty($users)): ?>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['email']); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>

</body>
</html>
