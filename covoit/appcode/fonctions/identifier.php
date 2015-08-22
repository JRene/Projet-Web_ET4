<?php
	if (isset($_POST['mailUtilisateur']) && isset($_POST['mdpUtilisateur'])) {
		$inputMail = $_POST['mailUtilisateur'];
		$inputMDP = $_POST['mdpUtilisateur'];

		$conn = mysqli_connect("localhost", "root", "", "polycar_mdp");
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			if ($res = mysqli_query($conn, "SELECT * FROM utilisateur_mdp WHERE mail = \"$inputMail\";")) {
				if (mysqli_num_rows($res) > 0) {
					while ($ligne = mysqli_fetch_row($res)) {
						$id = $ligne[0];
						$hashMDP = utf8_encode($ligne[2]);
					}

					if ($hashMDP == hash('sha512', utf8_decode($inputMDP))) {
						// Succès de la connexion
						session_start();
						
						$_SESSION["idUtilisateur"] = $id;
						$_SESSION["charge"] = "false";
						
						// Incomplet
						if ($_POST['chkRemember'] == "true") {
							setcookie("usermail", $inputMail);
						}
						else {
							unset($_COOKIE["usermail"]);
						}

						header("Content-Type: text/xml");
						echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
						echo "<root>\n";
						echo "\t<item acceptConnection=\"true\"/>\n";
						echo "</root>\n";
					}
					else {
						// Echec
						header("Content-Type: text/xml");
						echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
						echo "<root>\n";
						echo "\t<item acceptConnection=\"false\"/>\n";
						echo "</root>\n";
					}
				}
			}
			else {
				// Echec
				header("Content-Type: text/xml");
				echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
				echo "<root>\n";
				echo "\t<item acceptConnection=\"false\"/>\n";
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
		echo "\t<item acceptConnection=\"false\"/>\n";
		echo "</root>\n";
	}
?>