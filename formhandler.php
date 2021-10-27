<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//website email
$email_from = 'info@kingsgateschools.com'; //info@kingsgateschools.com
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'kingsgateschools@yahoo.com';
$headers = "From: $email_from \r\n";
$headers .= "Rely-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.php");


?>