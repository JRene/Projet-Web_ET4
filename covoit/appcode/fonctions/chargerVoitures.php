<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
	
	if (isset($_POST['idUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = $_POST['idUtilisateur'];
			
			if ($res1 = mysqli_query($conn, "SELECT * FROM UtiVoit WHERE idUtilisateur = \"$idUtilisateur\";")) {
				if (mysqli_num_rows($res1) > 0) {
					while ($ligne = mysqli_fetch_row($res1)) {
						$idVoiture = $ligne[1];
							
						if ($res2 = mysqli_query($conn, "SELECT * FROM Voiture WHERE idVoiture = \"$idVoiture\";")) {
							if (mysqli_num_rows($res2) > 0) {
								include ($root . $classe_voiture);

								header("Content-Type: text/xml");
								echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
								echo "<liste>\n";

								while ($ligne = mysqli_fetch_row($res2)) {
									$v = new Voiture($ligne[0], utf8_encode($ligne[1]),
													utf8_encode($ligne[2]), utf8_encode($ligne[3]),
													utf8_encode($ligne[4]), $ligne[5],
													utf8_encode($ligne[6]));
									//$garage[] = $v;
									echo "\t<voiture id=\"" . $v->getId() .
										"\" marque=\"" . $v->getMarque() .
										"\" nom=\"" . $v->getNom() .
										"\" couleur=\"" . $v->getCouleur() .
										"\" info=\"" . $v->getInfo() .
										"\" nbPlaces=\"" . $v->getNbPlaces() .
										"\" urlPhoto=\"" . $v->getUrlPhoto() . "\" />\n";
								}

								echo "</liste>\n";
							}
						}
					}
				}
			}
			mysqli_close($conn);
		}
	}
?>