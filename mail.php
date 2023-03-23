<?php
//get data from form  
$nom = $_POST['firstname'];
$prenom = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "selvanadin.laurent.sio@mail.com";

$subject = "Mail From Portfolio";
$txt = "Nom = " . $nom .
    "\r\n  Prenom = " . $prenom .
    "\r\n  Email = " . $email .
    "\r\n Message =" . $message;

$headers = "From: noreply@portfolio-de-laurenT.com" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thanks.html");
