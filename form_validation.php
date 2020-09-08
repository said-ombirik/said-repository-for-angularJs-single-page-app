<?php
$name = $_POST['name'];
$costumer_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'tripsinmorocco0@gmail.com';
$email_subject = "New Form Submissiom"
$email_body = "User name: $name.\n ".  "customer email: $costumer_email.\n". "costumer message: $message.\n";

$to = "saidombirik@gmail.com"
$headers = "From: $email_from \r\n";
$headers .= "Reply_To: $costumer_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header ("Location: index.html");
?>