<?php
	$conn = mysqli_connect("localhost", "root", "", "polycar");
	session_start();
	
	if (!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	}
	else {
		$idUtilisateur = $_SESSION['idUtilisateur'];
		$date = date_create($_POST['dateDepart'])->format('d-m-Y');
		$nom = utf8_decode($_POST['nomGroupe']);
		$depart = utf8_decode($_POST['depart']);
		$arrivee = utf8_decode($_POST['arrivee']);
		$idVoiture = $_POST['voiture'];
		
		if (isset($_POST['infos'])) {
			$info = utf8_decode($_POST['infos']);
		}
		else {
			$info = "";
		}
		
		if (isset($_POST['contribution'])) {
			$contribution = utf8_decode($_POST['contribution']);
		}
		else {
			$contribution = "";
		}
		
		$res = mysqli_query($conn, "INSERT INTO Groupe (idVoiture, nom, info, contribution, depart, arrivee) VALUES (\"$idVoiture\", \"$nom\", \"$info\", \"$contribution\", \"$depart\", \"$arrivee\");");
		$idGroupe = mysqli_insert_id($conn);
		$res = mysqli_query($conn, "INSERT INTO HorairePonctuel (date, heure) VALUES (\"$date\", \"00:00:00\");");
		$idHoraire = mysqli_insert_id($conn);
		$res = mysqli_query($conn, "INSERT INTO TypeHoraire (idGroupe, idPonctuel, ponctuel) VALUES (\"$idGroupe\", \"$idHoraire\", \"1\");");
		$res = mysqli_query($conn, "INSERT INTO ChefGroupe (idUtilisateur, idGroupe) VALUES (\"$idUtilisateur\", \"$idGroupe\");");
		
		mysqli_close($conn);
		
		header('Location: http://localhost/covoit/page_nouveaugroupe.php');
	}
?>