<?php

try{
	$bdd = new PDO ("mysql:host=localhost;dbname=portfolio;charset=utf8",'root',''); 
	}catch(Exeption $e){
	Die ('Erreur :'.$e->getMessage());
	}
	echo "<br>connection pdo ok <br>";
?>