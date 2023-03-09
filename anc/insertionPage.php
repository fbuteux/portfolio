<strong>page insertion nouveau document</strong>
<?php include_once("CSS.php"); ?>
<html>
<body class="body">
<fieldset class="fieldset">
<form action="insertionOk.php" method="POST" > 

		nom du doc* :</br>			<input type="text" name="nomdoc" placeholder="jeu" class="input" required autofocus="autofocus"/></br>
		categorie :</br>
									<select name="categorie" 	class="input">
										<option value=""		class="input">choisir ...	</option>
										<option value="1"		class="input">reseau		</option>
										<option value="2"		class="input">dev			</option>
										<option value="3"		class="input">systeme		</option>
									</select></br>	
									
		date d'import :</br>		<input type="text" name="dateimport" placeholder="10/09/2020" class="input" /></br>	
		description* :</br>			<textarea name="description" placeholder="entrez du texte" class="input">entrez du texte..</textarea></br>
		importer une doc :</br>
		
	
	<input type="submit" value="valider" name="valider" class="bouton" />
	<input type="reset"  value="effacer" class="bouton" />
</form>
</fieldset>
<a href="http://localhost/portfolio/accueil.php" class="lien">retour à la page d'accueil</a></br>


