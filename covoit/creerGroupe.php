<?php
	$conn = mysqli_connect("localhost", "root", "", "polycar");
	
	if (!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	}
	else {
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
		
		mysqli_close($conn);
		
		header('Location: http://localhost/covoit/page_nouveaugroupe.php');
	}
?>