<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
	
	if (isset($_POST['idUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = $_POST['idUtilisateur'];
			if ($res1 = mysqli_query($conn, "SELECT * FROM UtiTrajet WHERE idUtilisateur = \"$idUtilisateur\";")) {
				if (mysqli_num_rows($res1) > 0) {
					while ($ligne = mysqli_fetch_row($res1)) {
						$idTrajet = $ligne[1];
						
						if ($res2 = mysqli_query($conn, "SELECT * FROM Trajet WHERE idTrajet = \"$idTrajet\";")) {
							if (mysqli_num_rows($res2) > 0) {
								include ($root . $classe_trajet);

								header("Content-Type: text/xml");
								echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
								echo "<liste>\n";

								while ($ligne = mysqli_fetch_row($res2)) {
									$t = new Trajet($ligne[0], utf8_encode($ligne[1]),
													utf8_encode($ligne[2]), utf8_encode($ligne[3]));
									//$trajets[] = $t;

									echo "\t<trajet id=\"" . $t->getId() .
										"\" depart=\"" . $t->getDepart() .
										"\" arrivee=\"" . $t->getArrivee() .
										"\" info=\"" . $t->getInfo() . "\" />\n";
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