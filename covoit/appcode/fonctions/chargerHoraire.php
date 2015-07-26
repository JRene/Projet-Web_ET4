<?php
	if (isset($_GET['idGroupe'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
		
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		} 
		else {
			$id = $_GET['idGroupe'];
			
			if ($res = mysqli_query($conn, "SELECT * FROM TypeHoraire WHERE idGroupe = \"$id\";")) {
				if (mysqli_num_rows($res) > 0) {
					while ($ligne = mysqli_fetch_row($res)) {
						if ($ligne[3] == 1) {
							$idHoraire = $ligne[2];
							
							if ($res2 = mysqli_query($conn, "SELECT * FROM HorairePonctuel WHERE idPonctuel = \"$idHoraire\";")) {
								if (mysqli_num_rows($res2) > 0) {
									while ($ligne = mysqli_fetch_row($res2)) {
										include('classe_ponctuel.php');
										$ponctuel = new Ponctuel($ligne[0], $ligne[1], $ligne[2]);
									}
								}
							}
						}
						else {
							$idHoraire = $ligne[1];
							
							if ($res3 = mysqli_query($conn, "SELECT * FROM HoraireRecurrent WHERE idRecurrent = \"$idHoraire\";")) {
								if (mysqli_num_rows($res3) > 0) {
									while ($ligne = mysqli_fetch_row($res3)) {
										include ('classe_recurrent.php');
										$recurrent = new Recurrent($ligne[0], $ligne[1], $ligne[2], $ligne[3], $ligne[4], $ligne[5], $ligne[6], $ligne[7], $ligne[8]);
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