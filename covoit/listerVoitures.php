<?php
	if (isset($_SESSION['idUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = $_SESSION['idUtilisateur'];
			if ($res1 = mysqli_query($conn, "SELECT * FROM UtiVoit WHERE idUtilisateur = \"$idUtilisateur\";")) {
				if (mysqli_num_rows($res1) > 0) {
					while ($ligne = mysqli_fetch_row($res1)) {
						$idVoiture = $ligne[1];
						
						if ($res2 = mysqli_query($conn, "SELECT * FROM Voiture WHERE idVoiture = \"$idVoiture\";")) {
							if (mysqli_num_rows($res2) > 0) {
								while ($ligne = mysqli_fetch_row($res2)) {
									echo "<option value=\"$ligne[0]\">$ligne[1] $ligne[2] $ligne[3]</option>";
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