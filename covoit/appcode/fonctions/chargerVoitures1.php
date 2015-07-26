<?php
	if ($res1 = mysqli_query($conn, "SELECT * FROM UtiVoit WHERE idUtilisateur = \"$idUtilisateur\";")) {
		if (mysqli_num_rows($res1) > 0) {
			while ($ligne = mysqli_fetch_row($res1)) {
				$idVoiture = $ligne[1];
				
				include ('chargerVoiture.php');
			}
		}
	}
?>