<?php
	if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['mdp'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
		
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else 
		{
			$mail = utf8_decode($_POST['mail']);
			$pseudo = utf8_decode($_POST['pseudo']);
			$prenom = utf8_decode($_POST['prenom']);
			$nom = utf8_decode($_POST['nom']);
			$annee = $_POST['niveau'];
			$specialite = $_POST['specialite'];
			$mdp = hash('sha512', utf8_decode($_POST['mdp']));
			
			mysqli_query($conn, "INSERT INTO Utilisateur (mail, pseudo, prenom, nom, annee, specialite) VALUES (\"$mail\", \"$pseudo\", \"$prenom\", \"$nom\", \"$annee\", \"$specialite\");");
			if ($res = mysqli_query($conn, "SELECT idUtilisateur FROM Utilisateur WHERE mail = \"$mail\";")) {
				if (mysqli_num_rows($res) > 0) {
					while ($ligne = mysqli_fetch_row($res)) {
						$id = $ligne[0];
					}
					mysqli_select_db($conn, "polycar_mdp");
					
					if (!$conn) {
						die("Connection failed : " . mysqli_connect_error());
					}
					else {
						mysqli_query($conn, "INSERT INTO Utilisateur_mdp VALUES (\"$id\", \"$mail\", \"$mdp\");");
						
						session_start();
						$_SESSION['idUtilisateur'] = $id;
						header('Location: http://localhost/covoit/page_inscriptionreussie.php');
						exit();
					}
				}
			}
			mysqli_close($conn);
		}
	}
?>