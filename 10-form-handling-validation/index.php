<?php
$name=$email=$message="";
$feedback="";

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $name=htmlspecialchars($_POST["name"]);
    $email=htmlspecialchars($_POST["email"]);
$message=htmlspecialchars($_POST["message"]);

if (!empty($name) && !empty($email) && !empty($message)){
    $feedback="Thank you, $name! Your message has been received.";
} else{
    $feedback="Please fill in all the fields.";
}
}
?>

<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Email:</label>
    <input type="email" name="email"><br><br>

    <label>Message:</label>
    <textarea name="message"></textarea><br><br>

    <input type="submit" value="submit">
</form>

<!-- Feedback Section -->
<p style="color:green;"><?php echo $feedback; ?></p>