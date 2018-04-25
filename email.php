<?php

$email = $_POST['email'];
$newsletter =" From: $email";
$recipient = "minefulltrader@outlook.com";
$subject = "NewsLetter";
$mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); 
header("Location: http://www.minefulltrader.org"); 
exit();
?>
