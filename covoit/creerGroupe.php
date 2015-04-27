<?php
	$conn = mysqli_connect("localhost", "root", "", "polycar");
	if (!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	}
	else {
		$idVoiture = 1;	//A MODIFIER (Julien)
		$nom = "";		//A MODIFIER (Julien)
		if (isset($_POST['note'])) {
			$info = $_POST['note'];
		}
		else {
			$info = "";
		}
		$contribution = "";	//A COMPLETER (Julien)
		$depart = $_POST['adresse'];
		$arrivee = $_POST['adresseR'];
		
		$res = mysqli_query($conn, "INSERT INTO Groupe (idVoiture, nom, info, contribution, depart, arrivee) VALUES (\"$idVoiture\", \"$nom\", \"$info\", \"$contribution\", \"$depart\", \"$arrivee\");");
		
		/*if (mysqli_num_rows($resultat) > 0) {
			while ($ligne = mysqli_fetch_row($resultat)) {
				$nom = utf8_encode($ligne[1]);
				$mail = utf8_encode($ligne[2]);
				$notes = utf8_encode($ligne[3]);
				
				echo "<table>";
				echo "<tr><td class=\"champ\"><div class=\"celcont\">Nom</div></td><td class=\"valeur\"><div class=\"celcont\">$nom</div></td></tr>";
				echo "<tr><td class=\"champ\"><div class=\"celcont\">Adresse mail</div></td><td class=\"valeur\"><div class=\"celcont\">$mail</div></td></tr>";
				echo "<tr><td class=\"champ\"><div class=\"celcont\">Notes</div></td><td class=\"valeur\"><div class=\"celcont\">$notes</div></td></tr>";
				echo "</table>";
			}
		}
		else {
			
		}*/
		mysqli_close($conn);
	}
?>