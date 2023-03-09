<?php include('connexion_PDO.php');
if(isset($_POST['sub'])){
	$iddoc = $_POST['iddoc'];
	
	if(isset($_FILES['fichier'])and $_FILES['fichier']['error']==0)
	{
		$dossier= 'photo/';
		$temp_name=$_FILES['fichier']['tmp_name'];
		if(!is_uploaded_files($temp_name))
		{
			exit("le fichier est introuvable");
		}
		if($_FILES['fichier']['size'] >= 1000000){
			exit("erreur, le fichier est volumineux");
		}
		$infofichier = pathinfo($_FILES['fichier']['name']);
		$extention_upload = $infofichier['extention'];
		
		$extention_upload = strolower($extention_upload);
		$eextentions_autorisees = array('png','jpeg','jpg');
		if(in_array(extention_upload, $eextentions_autorisees))
		{
			exit ("erreur, inserer une image svp");
		}
		$nom_photo = $iddoc.".".$extention_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo))
		{
			exit("probleme dans le telechargement de l'image");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="inconnu.jpg";
	}
	$requete="INSERT INTO documents VALUES('$iddoc','$ph_name')";
	$resultat=mysqli_query($link,$requete);
	header('location: affichage_etudiant.php');
}
?>
<form action ="" method="post" enctype="multipart/form-data">
	<input type="file" name="doc"/>
	<input type="submit" name="sub" value="valider" />
</form>
