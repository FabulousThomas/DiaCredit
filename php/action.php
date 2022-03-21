<?php

// $name = $_POST['name']; //Sender's name
// $email = $_POST['email']; //Sender's email
// $message = $_POST['message'];
// $to = "thomasangel697@gmail.com";
// $subject = "Mail from DiaCrediting.com";
// $txt = "Name = ".$name . "\r\n Email = " . $email . "\r\n Message = " . $message;
// $headers = "From: noreply@diacrediting.com" . "\r\n" . "CC: somebodyelse@example.com";

// if($email != null) {
    // mail($to, $subject, $txt, $headers);
// }

// header("Location: www.google.com");


$name = $_POST['name']; //Sender's name
$email = $_POST['email']; //Sender's email
$message = $_POST['message'];
$to = "thomasangel697@gmail.com";
$subject = "Mail from diaCrediting.com";
$txt = "Name = ".$name . "\r\n Email = " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@diacrediting.com" . "\r\n" . "CC: somebodyelse@example.com";

if($email != null) {
    mail($to, $subject, $txt, $headers);
    header("Location: ../success.html");
} else {
    header("Location: ../error.html");
}


 ?>