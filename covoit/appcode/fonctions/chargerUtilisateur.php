<?php
	include($root . $classe_utilisateur);
	
	if (isset($_SESSION["idUtilisateur"]) && isset($_SESSION["charge"])) {
		if ($_SESSION["charge"] == "false") {
			$conn = mysqli_connect("localhost", "root", "", "polycar");
			
			if (!$conn) {
				die("Connection failed : " . mysqli_connect_error());
			}
			else {
				$id = $_SESSION['idUtilisateur'];
				
				if ($res = mysqli_query($conn, "SELECT * FROM Utilisateur WHERE idUtilisateur = \"$id\";")) {
					if (mysqli_num_rows($res) > 0) {
						while ($ligne = mysqli_fetch_row($res)) {
							$user = new Utilisateur($id, utf8_encode($ligne[1]), 
													utf8_encode($ligne[2]), utf8_encode($ligne[3]), 
													utf8_encode($ligne[4]), utf8_encode($ligne[5]), 
													utf8_encode($ligne[6]), utf8_encode($ligne[7]), 
													utf8_encode($ligne[8]), $ligne[9], $ligne[10], 
													$ligne[11], $ligne[12]);
						}
						
						$_SESSION["prenomUtilisateur"] = $user->getPrenom();
						$_SESSION["nomUtilisateur"] = $user->getNom();
						$_SESSION["pseudoUtilisateur"] = $user->getPseudo();
					}
				}
				mysqli_close($conn);
			}
		}
	}
?>