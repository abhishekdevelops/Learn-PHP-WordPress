<?php
$conn = mysqli_connect("localhost", "root", "", "learning_php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users 
            SET name='$name', email='$email', password='$password'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully! <a href='fetch_users.php'>View Users</a>";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
