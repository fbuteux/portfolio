<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Florent Buteux</title>
  <link rel="stylesheet" href="stylecontact.css">
</head>
<body class="accueil">
<nav class="nav-bar">
  <ul>
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="experiences.html">Expériences </a></li>
	<li><a href="veille.html">Veille</a></li>
    <li><a href="formation.html">Formation</a></li>
    <li><a href="apropos.html">A propos</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
	<div class="jump">.</div>
	<div class="portrait">
		<div class="titre">
		<div class="inter_titre">Contact</div>
	</div>
	</div>
			<?php 
	if(isset($_GET['E54g8'])){
	?>
	<div class="section1" style="background-color:#D9FFCC; color: #242424; font-size: 14px;">Le message à bien été envoyé</div>
	<?php
	}
	
	?>
	<div class="section1">


	<form class="boite" method="post" action="sendmail.php">
	<p style="text-align: center; font-size: 14px; ">
	N'ésitez pas à me contacter si mon profil vous intéresse.<br>
	Envoyez moi un mail grâce a ce formulaire.<br>
	Les champs marqués d'une <strong style="color: red;">*</strong> doivent être renseignés<br>
	<a href="mentionlegale.html" style="color: #CDCDCD; text-decoration:none;">En savoir plus sur les informations transmise.</a>
	
	</p>
		<input class="champ" type="text" name="name" placeholder="Nom*" required/>
		<input class="champ" type="email" name="email" placeholder="Adresse e-mail*" required/>
		<textarea class="area" name="message" placeholder="Message*" required></textarea>
		<input class="download" type="submit" value="Envoyer"/>
	</form>
	</div> 

	<div class="jump"></div>
		<footer >
	<a href="mentionlegale.html" style="color: #747474; text-decoration:none;">mentions légales</a>
	</footer>
</body>	
</html>