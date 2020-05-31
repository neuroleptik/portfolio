<?php

$mail = "brasseletjeanbaptiste@hotmail.fr";
$subject = "Portfolio : ".$_POST["subject"];
$body = strip_tags($_POST["body"]."\r\nAdresse : ".$_POST["email"]);
if (mail($mail,$subject,$body)){
	echo "<script>alert('Le message à bien été envoyé');window.location.href='https://www.jean-baptiste-brasselet.fr/';</script>";
	
}
else{
	echo "<script>alert('Erreur de l'envoie du message');window.location.href='Location: https://www.jean-baptiste-brasselet.fr/contact.html';</script>";
}
?>