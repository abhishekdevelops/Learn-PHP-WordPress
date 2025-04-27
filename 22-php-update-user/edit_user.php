<?php
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user ID specified.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form action="update_user.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>

    <label>Password:</label><br>
    <input type="text" name="password" value="<?php echo $user['password']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>

<?php
mysqli_close($conn);
?>
