<?php
	include ('classe_voiture.php');
	
	if (isset($groupe)) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idVoiture = $groupe->getVoiture();
			if ($res = mysqli_query($conn, "SELECT * FROM Voiture WHERE idVoiture = \"$idVoiture\";")) {
				if (mysqli_num_rows($res) > 0) {
					while ($ligne = mysqli_fetch_row($res)) {
						$v = new Voiture($ligne[0], utf8_encode($ligne[1]),
										utf8_encode($ligne[2]), utf8_encode($ligne[3]),
										utf8_encode($ligne[4]), $ligne[5],
										utf8_encode($ligne[6]));
						
						$marque = $v->getMarque();
						$nom = $v->getNom();
						$couleur = $v->getCouleur();
						$infos = $v->getInfo();
						$nbPlaces = $v->getNbPlaces();
						
						echo "<h4 class=\"text-left text-primary\">Voiture : $marque $nom $couleur ($nbPlaces places)</h5>";
						echo "<ul><li><h5>Informations sur la voiture : $infos</h5></li></ul>";
					}
				}
			}
			mysqli_close($conn);
		}
	}
?>