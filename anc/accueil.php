<?php session_start();
$_SESSION['prenom'] = 'florent';							// session 
echo "Bienvenue ".$_SESSION['prenom'];
include_once"fonction.php";
include_once("CSS.php");
?>

<a href="http://localhost/portfolio/pageConnection.php" class="lien" >deconnection</a>

<html>
<body class="body">
<h2 class="titre" >portfolio de <?= $_SESSION['prenom'];?></h2> 
														
<div class="classsearchbar">																	<! //  SEARCHBAR !>
<form action="" method="POST"> 
<input type="text" name="search" placeholder="Search..." class="searchbar" />
<input type="submit" value="rechercher" name="rechercher" class="bouton"/>
</form>
</div>


<a href="http://localhost/portfolio/insertionPage.php" class="lien" >inserer une doc </a></br></br>
	
	
	<?php									///////// S U P P R I M E R 2   D E S   D O N N E E S ////////
	if(isset($_REQUEST['action'])&&($_REQUEST['action'] == 'suprimerUneLigne')){
	$iddoc = $_REQUEST ['iddoc'];
	$mes = supprimerLigne($bdd,$iddoc);}
	
	?>






<?php 									///////// M O D I F I E R   D E S   D O N N E E S ////////
include_once"connexion_PDO.php";
if (isset($_POST['validation']))
{
//modifier($bdd);
	$iddoc		 =	($_POST['iddoc']);
	$nomdoc 	 = 	($_POST['nomdoc']);		
	$dateimport	 = 	($_POST['dateimport']);	
	$description = 	($_POST['description']);
	$categorie	 = 	($_POST['categorie']);
	
	
	$modifDOC = $bdd -> prepare("UPDATE DOCUMENTATION set 	nomdoc 			= ?,
															dateimport 		= ?,
															description 	= ?,
															categorie 		= ?   
								WHERE iddoc 	= ?");
	$modifDOC -> execute([$nomdoc,$dateimport,$description,$categorie,$iddoc]);
	$modifDOC = null;
} 



if(isset($_POST['rechercher'])&&(!empty($_POST['search']))){							/////// R E C H E R C H E ///////
			//affichageRecherche($bdd);
			try{
			
			$search = "%".$_POST['search']."%";	
			
			$sql = $bdd->prepare("  SELECT iddoc,nomdoc,dateimport,description,categorie,chemin
									FROM DOCUMENTATION
									WHERE nomdoc LIKE ? ");
			$sql->execute([$search]);
			

			affichage($sql);
			}catch(Exeption $e){
			Die ('Erreur :'.$e->getMessage());
			};
			
			
			
}else{													
if(isset($_POST['toutlesjeux'])){
																			  //////A F F I C H E R   T O U T //////
			try{
			$sql = $bdd->prepare('	SELECT iddoc,nomdoc,dateimport,description,categorie,chemin
									FROM DOCUMENTATION
									Order by iddoc'); 				
			$sql-> execute();
			
			affichage($sql);
			}catch(Exeption $e){
			Die ('Erreur :'.$e->getMessage());
			};

echo"
<form method='POST' action='accueil.php'>
<input type='submit' value='reduire' class='bouton' />
</form>";
 																//////A F F I C H E R   L I M I T 
		}else{
			
			try{
			$sql = $bdd->prepare('SELECT iddoc,nomdoc,dateimport,description,categorie,chemin
									FROM DOCUMENTATION
									LIMIT 5'); 				
			$sql-> execute();

			affichage($sql);
			}catch(Exeption $e){
			Die ('Erreur :'.$e->getMessage());
			};
			echo"
			<form method='POST' action='accueil.php'>
			<input type='submit' value='afficher tout les jeux' name='toutlesjeux' class='bouton'/>
				</form>";
		}
		
			?>
<?php } ?>

<?php if(isset($mes)){echo "<br>".$mes;
						echo"<a href='http://localhost/portfolio/accueil.php' class='lien' > dacc </a></br>";} ?>

 <a href='http://localhost/portfolio/docs/fiche_HSRP.pdf' class='lien'> doc test </a>
<body>  
</html>