<?php
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$visitor_email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];

//website email
$email_from = 'info@kingsgateschools.com'; //info@kingsgateschools.com
$email_subject = 'New Form Submission';
$email_body = "User Firstname: $firstname.\n".
              "User Surname: $surname.\n".
              "User Email: $visitor_email.\n".
              "User Phonenumber: $phonenumber.\n".
              "User Address: $address.\n".
              "User Gender: $gender.\n";

$to = 'kingsgateschools@yahoo.com';
$headers = "From: $email_from \r\n";
$headers .= "Rely-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.php");


?>