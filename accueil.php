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
    <li><a href="experiences.html">Expériences </a></li>
	<li><a href="veille.html">Veille</a></li>
    <li><a href="formation.html">Formation</a></li>
    <li><a href="apropos.html">A propos</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
	<div class="jump">.</div>
	<div class="portrait">. </div>
	<div class="titre">
		<div class="inter_titre">Accueil</div>
	</div>
	<div class="section1">
Je m'appelle Buteux Florent et je suis étudiant 
en BTS SIO SISR.<br><br> Intéressé par les technologies 
de l'information et de la communication et notament le réseau / scripting, je suis très motivé 
pour apprendre et me perfectionner dans ce domaine en constante évolution.

Au cours de mes études, j'ai acquis des compétences en matière de 
conception, de développement et de maintenance de systèmes d'information. 
J'ai également appris à travailler en équipe et à communiquer efficacement 
avec les utilisateurs.
	</div>
	<div class="contdownload">
		<a class="download"  href="tab.php" >Tableau de compétences</a>	
		<a class="cv"  href="cv.pdf" target="_blank">ouvrir le CV</a>
		<a class="down" href="cv.pdf" download="CV_Buteux_Florent.pdf">&#11015;</a>
	</div>

	<?php
		

		if ((isset($_POST['accept-cookies']))||(isset($_COOKIE['cookieConsent']))) {
		setcookie('cookieConsent', 'true', time() + (10 * 365 * 24 * 60 * 60), '/');
		$_COOKIE['cookie']="accepted";
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
		}
		if (isset($_POST['stp'])) {print_r($_COOKIE);}
		} else {
		$_COOKIE['cookie']="denied";
		echo "<div class='cookie-banner'>
		<p>This website uses cookies to ensure you get the best experience on our website.</p>
		<form method='post' action='accueil.php'>
		<button type='submit' name='accept-cookies' class='cookie-btn'>OK</button>
		</form>
		</div>"; 
		}
		?>
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
	<div class="jump" style="opacity: 0;">eee</div> 
		
	
	


	
	
	
	
	</body>
	<footer>
	<a href="mentionlegale.html" style="color: #747474; text-decoration:none;">mentions légales</a>
	<a href="https://fr.000webhost.com/vie-privee" style="color: #747474; text-decoration:none;">Privacy policy 000webhost</a>	
	</footer>
	
		
			
	

</html>