<?php
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["message"];

$formcontent = "From: $name \n comment: $comment";
$recipient = "amy@amymartins.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
