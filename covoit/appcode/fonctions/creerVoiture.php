<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
	session_start();

	if (isset($_POST["marqueVoiture"]) && isset($_POST["nomVoiture"]) && isset($_SESSION["idUtilisateur"])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
		
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = utf8_decode($_SESSION['idUtilisateur']);
			$marque = utf8_decode($_POST['marqueVoiture']);
			$nom = utf8_decode($_POST['nomVoiture']);
			$couleur = utf8_decode($_POST['couleurVoiture']);
			$info = utf8_decode($_POST['infoVoiture']);
			$nbPlaces = utf8_decode($_POST['nbPlacesVoiture']);
			
			if (isset($_POST['couleur'])) {
				$couleur = utf8_decode($_POST['couleur']);
			}
			else {
				$couleur = "";
			}

			if (isset($_POST['infos'])) {
				$info = utf8_decode($_POST['infos']);
			}
			else {
				$info = "";
			}
			
			if (isset($_POST['nbPlaces'])) {
				$nbPlaces = utf8_decode($_POST['nbPlaces']);
			}
			else {
				$nbPlaces = "";
			}

			$res = mysqli_query($conn, "INSERT INTO Voiture (marque, nom, couleur, info, nbPlaces) VALUES (\"$marque\", \"$nom\", \"$couleur\", \"$info\", \"$nbPlaces\");");
			$idVoiture = mysqli_insert_id($conn);
			$res = mysqli_query($conn, "INSERT INTO UtiVoit (idUtilisateur, idVoiture) VALUES (\"$idUtilisateur\", \"$idVoiture\");");


			mysqli_close($conn);

			header("Location: " . $root . $page_profil);
		}
	}
?>