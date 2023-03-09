<?php                                       ///////// I N S E R E R    D E S   D O N N E E S ////////
include_once("connexion_PDO.php");
include_once("CSS.php");
if (isset($_POST['valider']))
{	try{


	$nomdoc 	 = 	($_POST['nomdoc']);		
	$dateimport	 = 	($_POST['dateimport']);	
	$description = 	($_POST['description']);
	$categorie	 = 	($_POST['categorie']);
	
	if ($description == "entrez du texte..")
	{
		$description = "aucune";
	}
	
	//affecte l'id dans la requete de jeu
	if($categorie != 0){
	if(!empty($categorie)){

	$statementJeu = $bdd->prepare("INSERT INTO DOCUMENTATION (iddoc,nomdoc,dateimport,description,categorie) 
											VALUES(:iddoc,:nomdoc,:dateimport,:description,:categorie);");
	$statementJeu -> execute([
	"iddoc"			=> NULL,
	"nomdoc"		=> $nomdoc,
	"dateimport" 	=> $dateimport,
	"description" 	=> $description,
	"categorie"		=> $categorie
	]);
	
	echo $nomdoc." a bien été inserré<br>";}
	}else{echo $nomdoc." a pas été inserré<br>"; ?>
		<form action="insertionPage.php" method="POST" >
			<input type="submit" value="recommencer" class="bouton" autofocus="autofocus" />
		</form>
	
	<?php
	}
	}catch(Exeption $e){
	
	Die ('Erreur :'.$e->getMessage());
	}
	
}?>

<form action="accueil.php" method="POST" >
<input type="submit" value="DACC" class="bouton" autofocus="autofocus" />
</form>
