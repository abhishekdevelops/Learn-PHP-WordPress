<?php
// Step 1: Connect to the database
$conn = mysqli_connect("localhost", "root", "", "learning_php");

// Step 2: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Fetch users from the database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>

<h2>Registered Users</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <?php
    // Step 4: Display users inside table
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No users found.</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// Step 5: Close the database connection
mysqli_close($conn);
?>
