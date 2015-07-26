<?php
	$dossier = 'images/';
	$fichier = basename($_FILES['avatar']['name']);
	$taille_maxi = 100000;
	$taille = filesize($_FILES['avatar']['tmp_name']);
	$extensions = array('.jpg', '.jpeg');
	$extension = strrchr($_FILES['avatar']['name'], '.'); 
	
	//Début des vérifications de sécurité...
	if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
	{
		 $erreur = 'Vous devez uploader un fichier de type jpg ou jpeg...';
	}
	if($taille>$taille_maxi)
	{
		 $erreur = 'Le fichier est trop gros...';
	}
	
	if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
	{
		 if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
		 {
			  echo 'Upload effectué avec succès !';
		 }
		 else //Sinon (la fonction renvoie FALSE).
		 {
			  echo 'Echec de l\'upload !';
		 }
	}
	else
	{
		 echo $erreur;
	}
?>