<!-- Obsolète -->

<?php
	include ($root . '/appcode/classes/classe_voiture.php');
	
	if ($res2 = mysqli_query($conn, "SELECT * FROM Voiture WHERE idVoiture = \"$idVoiture\";")) {
		if (mysqli_num_rows($res2) > 0) {
			while ($ligne = mysqli_fetch_row($res2)) {
				$v = new Voiture($ligne[0], utf8_encode($ligne[1]),
								utf8_encode($ligne[2]), utf8_encode($ligne[3]),
								utf8_encode($ligne[4]), $ligne[5],
								utf8_encode($ligne[6]));
				$garage[] = $v;
			}
		}
	}
?>