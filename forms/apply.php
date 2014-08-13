<?php
$message="";

# Email address to send the form data to. (Change to your address.)
$to="tigrecientifico@gmail.com";

# The E-Mail subject (You can change this)
$subject="Membership for Aquarium";


foreach ($_POST as $key=>$value) {
$message.=$key.": " . $value . "\n";
}

$sm=mail($to, $subject, $message);
?>

<!-- include your own success message here -->
Thank you for wanting to be a member! We hope to see you soon!<br>

<small><a href="index.html">home</a></small>