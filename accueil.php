<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Florent Buteux</title>
  <link rel="stylesheet" href="styleaccueil.css">
</head>
<body class="accueil">
<nav class="nav-bar">
  <ul>
    <li><a href="accueil.php">Accueil</a></li>
    <li><a href="experiences.html">Stages </a></li>
	<li><a href="veille.html">Veille</a></li>
    <li><a href="formation.html">Formation</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
	<div class="jump">.</div>
	<div class="portrait">. </div>
	<div class="titre">
		<div class="inter_titre">Accueil</div>
	</div>
	<div class="section1">
	<img src="portrait2.png" style=" max-width: 100%; max-height: 100%; object-fit: contain; height: 150px; margin-right: 20px;">
Je m'appelle Florent Buteux, j'ai 22ans et je suis étudiant 
en BTS SIO SISR.<br><br> Intéressé par les technologies 
de l'information et de la communication et notament le réseau / scripting, je suis très motivé 
pour apprendre et me perfectionner dans ce domaine en constante évolution.
<br><br>
Au cours de mes études, j'ai acquis des compétences en matière de 
conception, de développement et de maintenance de systèmes d'information. 
J'ai également appris à travailler en équipe et à communiquer efficacement 
avec les utilisateurs.
	</div>
	<div class="contdownload">
		<a class="download"  href="tab.php" >Tableau de compétences</a>	
		<a class="download"  href="cv.pdf" target="_blank">ouvrir le CV</a>
		<a class="download" href="cv.pdf" download="CV_Buteux_Florent.pdf">&#129155;</a>
	</div>

	<?php
		if ((isset($_POST['accept-cookies']))||(isset($_COOKIE['cookieConsent']))) {
		setcookie('cookieConsent', 'true', time() + (10 * 365 * 24 * 60 * 60), '/');
		$_COOKIE['cookie']="accepted";
		}else if(isset($_POST['reject-cookies'])){
		setcookie('cookieConsent', 'false', time() + (10 * 365 * 24 * 60 * 60), '/');
		$_COOKIE['cookie']="rejected";	
		

		/*
		if (isset($_POST['stp'])){?>
		<div class="contdownload">
		<form action='accueil.php' method='post'>
		<input type='hidden' name="accept-cookies" value="<? echo $_POST['accept-cookies'];?>"/>
		<input class='download' type='submit' name='spt' value='cacher les cookies'>
		</form>
		</div>		
		<?php }else{ ?> 
		<div class="contdownload">
		<form action='accueil.php' method='post'>
		<input type='hidden' name="accept-cookies" value="<? echo $_POST['accept-cookies'];?>"/>
		<input class='download' type='submit' name='stp' value='voir mes cookies'>
		</form>
		</div>
		<?php 
		}*/
		if (isset($_POST['stp'])) {print_r($_COOKIE);}
		} else {
		$_COOKIE['cookie']="denied";
		echo "<div class='cookie-banner' style='display: flex; flex-direction: column; justify-content: center; align-items: center;'>
		<p>Ce site utilise les cookies 🍪 </p>
		<form method='post' action='accueil.php'>
		<button type='submit' name='accept-cookies' class='cook1'>Accepter</button>
		<button type='submit' name='reject-cookies' class='cook2'>Rejeter</button>
		</form>
		</div>"; 
		}
		?>
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 

		
	
	


	
	
	
	
	</body>
	<footer>
	<a href="mentionlegale.html" style="color: #747474; text-decoration:none;">mentions légales</a>
	<a href="https://fr.000webhost.com/vie-privee" style="color: #747474; text-decoration:none;">Privacy policy 000webhost</a>	
	<p style="color: #747474; text-decoration:none; padding:0px; margin:0px;" p>Développé par : Florent Buteux</p>
	<a href="https://fr.000webhost.com/" style="color: #747474; text-decoration:none; padding:0px; margin:0px;" p>Hébergé par : 000Webhost.com </a>
	</footer>
	
		
			
	

</html>