<?php
	if ($res = mysqli_query($conn, "SELECT * FROM Groupe WHERE idGroupe = \"$id\";")) {
		if (mysqli_num_rows($res) > 0) {
			while ($ligne = mysqli_fetch_row($res)) {
				$groupe = new Groupe($id, $ligne[1], utf8_encode($ligne[2]), utf8_encode($ligne[3]), 
								utf8_encode($ligne[4]), utf8_encode($ligne[5]), utf8_encode($ligne[6]));
				
				include ('classe_utilisateur.php');
				if ($res2 = mysqli_query($conn, "SELECT * FROM ChefGroupe WHERE idGroupe = \"$id\";")) {
					if (mysqli_num_rows($res2) > 0) {
						while ($ligne = mysqli_fetch_row($res2)) {
							$idChef = $ligne[0];
							
							if ($res3 = mysqli_query($conn, "SELECT * FROM Utilisateur WHERE idUtilisateur = \"$idChef\";")) {
								if (mysqli_num_rows($res3) > 0) {
									while ($ligne = mysqli_fetch_row($res3)) {
										$chef = new Utilisateur($id, utf8_encode($ligne[1]), 
																utf8_encode($ligne[2]), utf8_encode($ligne[3]), 
																utf8_encode($ligne[4]), utf8_encode($ligne[5]), 
																utf8_encode($ligne[6]), utf8_encode($ligne[7]), utf8_encode($ligne[8]));
									}
								}
							}
						}
					}
				}
				
				if ($res4 = mysqli_query($conn, "SELECT * FROM UtiGroupe WHERE idGroupe = \"$id\";")) {
					if (mysqli_num_rows($res4) > 0) {
						while ($ligne = mysqli_fetch_row($res4)) {
							$idUtilisateur = $ligne[0];
							
							if ($ligne[2] = 1 && $res5 = mysqli_query($conn, "SELECT * FROM Utilisateur WHERE idUtilisateur = \"$idUtilisateur\";")) {
								if (mysqli_num_rows($res5) > 0) {
									while ($ligne = mysqli_fetch_row($res5)) {
										$uti = new Utilisateur($id, utf8_encode($ligne[1]), 
																utf8_encode($ligne[2]), utf8_encode($ligne[3]), 
																utf8_encode($ligne[4]), utf8_encode($ligne[5]), 
																utf8_encode($ligne[6]), utf8_encode($ligne[7]), utf8_encode($ligne[8]));
										
										$membres[] = $uti;
									}
								}
							}
						}
					}
				}
			}
		}
	}
?>