<?php
$message="";

# Email address to send the form data to. (Change to your address.)
$to="tigrecientifico@gmail.com";

# The E-Mail subject (You can change this)
$subject="This is a message from the zoo website";


foreach ($_POST as $key=>$value) {
$message.=$key.": " . $value . "\n";
}

$sm=mail($to, $subject, $message);
?>

<!-- include your own success message here -->
Thank you for contacting us, we will take your comment/concern into consideration.<br>

<small><a href="index.html">home</a></small>