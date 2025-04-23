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

$source = isset($_GET["source"]) ? htmlspecialchars($_GET["source"]) : "";
?>
<?php if (!empty($source)): ?>
    <p style="color:blue;">🔍 Page visited via: <?php echo $source; ?></p>
<?php endif; ?>

<p>
    <a href="?source=google">Visit this page with GET parameter: ?source=google</a>
</p>


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