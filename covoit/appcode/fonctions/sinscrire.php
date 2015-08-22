<?php
	if (isset($_POST['prenomUtilisateur']) && isset($_POST['nomUtilisateur']) && isset($_POST['mailUtilisateur']) && isset($_POST['mdpUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
		
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else 
		{
			$mail = utf8_decode($_POST['mailUtilisateur']);
			$pseudo = utf8_decode($_POST['pseudoUtilisateur']);
			$prenom = utf8_decode($_POST['prenomUtilisateur']);
			$nom = utf8_decode($_POST['nomUtilisateur']);
			$annee = $_POST['niveauUtilisateur'];
			$specialite = $_POST['specialiteUtilisateur'];
			$mdp = hash('sha512', utf8_decode($_POST['mdpUtilisateur']));
			
			mysqli_query($conn, "INSERT INTO Utilisateur (mail, pseudo, prenom, nom, annee, specialite) VALUES (\"$mail\", \"$pseudo\", \"$prenom\", \"$nom\", \"$annee\", \"$specialite\");");
			if ($res = mysqli_query($conn, "SELECT idUtilisateur FROM Utilisateur WHERE mail = \"$mail\";")) {
				if (mysqli_num_rows($res) > 0) {
					while ($ligne = mysqli_fetch_row($res)) {
						$id = $ligne[0];
					}
					mysqli_select_db($conn, "polycar_mdp");
					
					include('upload.php');
					
					if (!$conn) {
						die("Connection failed : " . mysqli_connect_error());
					}
					else {
						mysqli_query($conn, "INSERT INTO Utilisateur_mdp VALUES (\"$id\", \"$mail\", \"$mdp\");");
						
						session_start();

						$_SESSION['idUtilisateur'] = $id;
						$_SESSION['charge'] = "false";
						
						header("Content-Type: text/xml");
						echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
						echo "<root>\n";
						echo "\t<item signedIn=\"true\"/>\n";
						echo "</root>\n";
					}
				}
				else {
					// Echec
					header("Content-Type: text/xml");
					echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
					echo "<root>\n";
					echo "\t<item signedIn=\"false\"/>\n";
					echo "</root>\n";
				}
			}
			else {
				// Echec
				header("Content-Type: text/xml");
				echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
				echo "<root>\n";
				echo "\t<item signedIn=\"false\"/>\n";
				echo "</root>\n";
			}
			mysqli_close($conn);
		}
	}
	else {
		// Echec
		header("Content-Type: text/xml");
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		echo "<root>\n";
		echo "\t<item signedIn=\"false\"/>\n";
		echo "</root>\n";
	}
?>