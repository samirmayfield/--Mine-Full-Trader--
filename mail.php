<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent= "\n From: $name \n Email Address: $email \n Message: $message";
$recipient = "minefulltrader@outlook.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 
header("Location: http://www.minefulltrader.org"); 
exit();
?>
