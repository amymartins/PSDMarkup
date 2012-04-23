<?php
ini_set('display_errors', 1);
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
$dsn = 'mysql:dbname=contact;host=127.0.0.1';
$user = 'root';
$password = 'password';
$dbh = new PDO($dsn, $user, $password);
$dbh->query("INSERT INTO `contact_request` (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')");

//
//$formcontent = "From: $name \n comment: $comment";
//$recipient = "amy@amymartins.co.uk";
//$subject = "Contact Form";
//$mailheader = "From: $email \r\n";
//$mailResult = mail($recipient, $subject, $formcontent, $mailheader); 
//var_dump($mailResult);
//        //or die("Error!");
//echo "Thank You!";
?>
