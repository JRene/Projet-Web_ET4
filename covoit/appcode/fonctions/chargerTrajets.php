<?php
	include ($root . '/appcode/classes/classe_trajet.php');
	
	if (isset($_SESSION['idUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = $_SESSION['idUtilisateur'];
			if ($res1 = mysqli_query($conn, "SELECT * FROM UtiTrajet WHERE idUtilisateur = \"$idUtilisateur\";")) {
				if (mysqli_num_rows($res1) > 0) {
					while ($ligne = mysqli_fetch_row($res1)) {
						$idTrajet = $ligne[1];
						
						if ($res2 = mysqli_query($conn, "SELECT * FROM Trajet WHERE idTrajet = \"$idTrajet\";")) {
							if (mysqli_num_rows($res2) > 0) {
								while ($ligne = mysqli_fetch_row($res2)) {
									$t = new Trajet($ligne[0], utf8_encode($ligne[1]),
													utf8_encode($ligne[2]), utf8_encode($ligne[3]));
									$trajets[] = $t;
								}
							}
						}
					}
				}
			}
			
			mysqli_close($conn);
		}
	}
?>