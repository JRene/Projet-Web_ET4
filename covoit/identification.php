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
					
					if ($hashMDP = hash('sha512', utf8_decode($inputMDP))) {
						// Succès de la connexion
						session_start();
						
						$_SESSION['idUtilisateur'] = $id;
						
						// Incomplet
						if ($_POST['remember']) {
							setcookie("usermail", $inputMail);
						} 
						else {
							unset($_COOKIE["usermail"]);
						}
						
						header('Location: http://localhost/covoit/page_identificationreussie.php');
						exit();
					}
					else {
						// MESSAGE D'ECHEC
					}
				}
			}
			else {
				// MESSAGE D'ECHEC
			}
			
			mysqli_close($conn);
		}
	}
	else {
		// MESSAGE D'ECHEC
	}
?>