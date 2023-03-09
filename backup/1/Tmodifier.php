<?php 
include_once("fonction.php");
include_once("CSS.php");
include_once"connexion_PDO.php";

	$iddoc = $_REQUEST ['iddoc'];
	echo "id doc = ".$iddoc ; 
	$sql = $bdd->query("SELECT iddoc,nomdoc,dateimport,description,categorie 
						FROM DOCUMENTATION
						WHERE iddoc='$iddoc' ");
	$result = $sql->fetch(PDO::FETCH_ASSOC);

	$iddoc		 =	($result['iddoc']);
	$nomdoc 	 = 	($result['nomdoc']);	
	$dateimport	 = 	($result['dateimport']);	
	$description = 	($result['description']);
	$categorie  = 	($result['categorie']);
	echo"

<html>
<body class='body'>
<fieldset class='fieldset'>
<form action='accueil.php' method='POST' > 

										<input type='hidden' name='iddoc'   value='$iddoc' required /></br>
		nom de la doc* :</br>			<input type='text' name='nomdoc'   value='$nomdoc' placeholder='doc' class='input' required /></br>
		choix categorie :</br>
		<select name='categorie' class='input'>
					<option value=''		class='input'>choisir ...	</option>
					<option value='1'		class='input'>reseau		</option>
					<option value='2'		class='input'>dev			</option>
					<option value='3'		class='input'>systeme		</option>
		</select></br>	
		date d'import :</br>		<input type='text' name='dateimport' value='$dateimport' placeholder='10/09/2020' class='input'  /></br>	
		description* :</br>			<textarea name='description' 		value='$description' placeholder='entrez du texte' class='input'> $description</textarea></br>
		importer un doc :
	<input type='submit' value='valider' name='validation' class='bouton' />
	<input type='reset'  value='effacer' class='bouton' />
</form>
</fieldset>
<a href='http://localhost/portfolio/accueil.php' class='lien'>retour au menu</a></br>";