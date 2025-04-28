<?php
// Step 1: Connect to database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Initialize variables
$search = "";
$results = [];
$limit = 5; // Users per page
$page = 1; // Default page

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = (int) $_GET['page'];
}

$start_from = ($page - 1) * $limit;

// Step 3: Handle search form submit
if (isset($_POST['submit'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $_GET['search'] = $search; // Pass search term into URL when paginating
}

// Step 4: Build search query
$search_sql = "";
if (!empty($_GET['search'])) {
    $search_term = mysqli_real_escape_string($conn, $_GET['search']);
    $search_sql = "WHERE name LIKE '%$search_term%' OR email LIKE '%$search_term%'";
}

// Step 5: Fetch users with LIMIT and search
$sql = "SELECT * FROM users $search_sql LIMIT $start_from, $limit";
$query = mysqli_query($conn, $sql);

// Fetch results
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $results[] = $row;
    }
}

// Step 6: Find total records for pagination
$count_sql = "SELECT COUNT(*) FROM users $search_sql";
$count_query = mysqli_query($conn, $count_sql);
$row_count = mysqli_fetch_row($count_query);
$total_records = $row_count[0];
$total_pages = ceil($total_records / $limit);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Users with Pagination</title>
</head>
<body>

<h2>Search Users</h2>

<form method="POST" action="">
    <input type="text" name="search" placeholder="Enter Name or Email" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>" required>
    <button type="submit" name="submit">Search</button>
</form>

<?php if (!empty($results)): ?>
    <h3>Search Results<?php if (!empty($_GET['search'])) echo " for \"" . htmlspecialchars($_GET['search']) . "\""; ?></h3>

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

    <br>
    <div>
    <?php
    $search_param = isset($_GET['search']) ? urlencode($_GET['search']) : '';
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='?page=$i&search=$search_param'>$i</a> ";
    }
    ?>
</div>


<?php elseif (isset($_GET['search'])): ?>
    <p>No results found for "<?php echo htmlspecialchars($_GET['search']); ?>".</p>
<?php endif; ?>

</body>
</html>

<?php
// Step 7: Close connection
mysqli_close($conn);
?>
