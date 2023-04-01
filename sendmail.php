<?php
// Récupération des données du formulaire

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "portfolio message de ".$name;
$message = $_POST['message'];

// Construction du corps du message
//$body = "Nom : $name\n";
//$body .= "Adresse e-mail : $email\n";
//$body .= "Sujet : $subject\n";
$body .= "$message";

// Envoi de l'e-mail
$to = "florent.sacrifice.fs@gmail.com"; // Remplacez par votre adresse e-mail
$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";
mail($to, $subject, $body, $headers);
$E54g8="1";
// Redirection vers une page de confirmation
header('Location: contact.php?E54g8=1');
exit();



	/*if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "L'adresse e-mail est valide";
	}else{
		echo "L'adresse e-mail n'est pas valide";
	}*/







?>



