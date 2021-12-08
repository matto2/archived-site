<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$msg = "
Name:$name
Email:$email
Comment:
$message";

$to = "mattosurfgmail.com";
$subject = "Form";
$message = $msg;
$headers = "form";
mail($to,$subject,$message,$headers);
?>