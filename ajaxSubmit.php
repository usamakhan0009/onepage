<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$header = "Form" . $email . "\r\n";
$header .= "X-Mailer PHP" . phpversion() . "\r\n";
$header .= "Mime Version 1.0 \r\n";
$header .= "Content Type: text/plain";
$comment = "This message has been sent by" . $name . "\r\n";
$comment .= "E-mail is:" . $email . "\r\n";
$comment .= "His message is"  . $message . "\r\n";

$for = "ukdilazaq009@gmail.com";
$subject = "contact form website";
mail($subject, utf8_decode($comment), $header);
echo json_encode(array(
	'Message' => sprintf("your message has been sent %s", $name);
));

?>