<?php
$name=$email=$message="";
$nameError=$emailError=$messageError="";
$feedback="";

if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $name=htmlspecialchars(trim($_POST["name"]));
    $email=htmlspecialchars(trim($_POST["email"]));
$message=htmlspecialchars(trim($_POST["message"]));

if(strlen($name)<3){
    $nameError="name must be atleast 3 characters long.";
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $emailError="Please enter valid email address.";
}

if(strlen($message)<5){
    $messageError="Message must be atleast 5 characters long.";
}
if (empty($nameError) && empty($emailError) && empty($messageError)){
    $feedback="Thank you, $name! Your message has been received.";
}
}
?>

<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $name; ?>"><br>
    <p style="color:red;"><?php echo $nameError; ?></p><br>


    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $email; ?>"><br>
    <p style="color:red;"><?php echo $emailError; ?></p><br>


    <label>Message:</label>
    <textarea name="message"><?php echo $message; ?></textarea><br>
    <p style="color:red;"><?php echo $messageError; ?></p>

    <input type="submit" value="submit">
</form>

<!-- Feedback Section -->
<p style="color:green;"><?php echo $feedback; ?></p>