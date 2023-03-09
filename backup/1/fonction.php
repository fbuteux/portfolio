<?php 
	include_once("connexion_PDO.php");
	
	function supprimerLigne($bdd,$iddoc){
	include_once("connexion_PDO.php");
		try{
	$iddoc = $_REQUEST ['iddoc'];	
	
	$recupNomJeu = $bdd->query("Select nomdoc from DOCUMENTATION where iddoc = $iddoc ");
	$nom = $recupNomJeu->fetch(PDO::FETCH_ASSOC);
	$nomdoc = $nom['nomdoc'];
	
	$statementJEU  = $bdd->query("DELETE FROM DOCUMENTATION WHERE iddoc = $iddoc ");
	$mes = $nomdoc." a bien ete supprimé";
		}catch(Exeption $e){
			Die ('Erreur :'.$e->getMessage());
			};
	return $mes;}
	
	
	
	function affichage($sql){
			
			$result = $sql->fetch(PDO::FETCH_ASSOC); 	
			?>

			<table border="0" cellpadding="5" cellspacing="2" style=" table-layout:fixed; width:60em;" class="table" ></br>
			<caption class="titre" > Mes docs </caption>
			<tr>

				<th>nom du doc</th>
				<th>date d'import</th>
				<th>description</th>
				<th>categorie</th>
				<th>edit</th>
				<th>corbeille</th>
				<th>voir</th>
				
			</tr>
			<?php 
				//foreach ($result as $row){
				//$iddoc = $row['iddoc'];
			while ($result!=FALSE){
				
				$iddoc = $result['iddoc'];
				?>
			<tbody>	
				<tr>

					<td align="center"> <?= $result['nomdoc']; ?></td>
					<td align="center"> <?= $result['dateimport']; ?></td>
					<td align="center"> <?= $result['description']; ?></td>
					<td align="center"> <?= $result['categorie']; ?></td>
					<td align="center"><a href='Tmodifier.php?iddoc=<?=$iddoc?>'>modifier</a> </td>
					<td align="center"><a href='accueil.php?action=suprimerUneLigne&amp;iddoc=<?=$iddoc?>'><img src="cam.png" /></a></td>
					<td align="center"><a href='<?= $result['chemin']; ?>'>voir</a> </td>
				</tr>
			</tbody>
			<?php
			$result=$sql->fetch(PDO::FETCH_ASSOC);
			}$sql=NULL; 
				
				?>
			</table></br>
	<?php 	if(empty($iddoc)){Die;}
			return $iddoc; } ?> 

	

	
