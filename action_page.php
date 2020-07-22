<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $name \n Message: $message";
	$recipient = "abhijithukzm@gmail.com";
	$subject = $_POST['subject'];
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header("Location: contact.html");
	echo "Thank You!";
?>