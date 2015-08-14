<?php
	//Sert à afficher le "bonjour" en haut de la page et à construire un utilisateur
	include($root . $classe_utilisateur);
	
	if (isset($_SESSION['idUtilisateur'])) {
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
												utf8_encode($ligne[6]), utf8_encode($ligne[7]), utf8_encode($ligne[8]));
					}
					
					$prenom = $user->getPrenom();
					$nom = $user->getNom();
					$pseudo = $user->getPseudo();
					
					echo "<h2 class=\"text-center text-primary\">Bonjour $prenom $nom ($pseudo) !</h2>";
				}
			}
			mysqli_close($conn);
		}
	}
?>