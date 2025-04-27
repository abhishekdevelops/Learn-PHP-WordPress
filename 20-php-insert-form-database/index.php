<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
</head>
<body>

<h2>Register New User</h2>

<form action="insert_user.php" method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="submit">Register</button>
</form>

</body>
</html>
