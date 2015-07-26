<?php
	include ('classe_groupe.php');
	
	$conn = mysqli_connect("localhost", "root", "", "polycar");

	if (!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	}
	else {
		/*if (isset($_POST['depart'])) {
			$depart = $_POST['depart'];
			$res = mysqli_query($conn, "SELECT * FROM Groupe WHERE depart = \"$depart\";");
		}
		else {*/
			$res = mysqli_query($conn, "SELECT * FROM Groupe;");
		//}
		
		if ($res) {
			if (mysqli_num_rows($res) > 0) {
				while ($ligne = mysqli_fetch_row($res)) {
					$id = $ligne[0];
					
					include ('chargerGroupe1.php');
					
					$idVoiture = $groupe->getVoiture();
					include ('chargerVoiture.php');
					
					mysqli_close($conn);
					
					$idGroupe = $groupe->getId();
					$nomGroupe = $groupe->getNom();
					$depart = $groupe->getDepart();
					$arrivee = $groupe->getArrivee();
					$marqueVoiture = $v->getMarque();
					$nomVoiture = $v->getNom();
					$couleurVoiture = $v->getCouleur();
					$nbPers = count($membres)+1;
					$nbPlaces = $v->getNbPlaces();
					$prenomChef = $chef->getPrenom();
					$nomChef = $chef->getNom();
					$pseudoChef = $chef->getPseudo();
					$urlChef = $chef->getUrlPhoto();
					
					echo "<div class=\"row clearfix\">";
					echo "<div class=\"col-md-12 column\">";
					echo "<div class=\"col-md-2 column\"></br>";
					echo "<a href=\"http://localhost/covoit/page_groupe.php?idGroupe=$idGroupe\"><img alt=\"140x140\ width=\"140\" height=\"140\" src=\"$urlChef\" class=\"img-circle\"/></a>";
					echo "</div>";
					echo "<div class=\"col-md-10 column\">";
					echo "<table class=\"table\" width=\"20\">";
					echo "<thead>";
					echo "<tr class =\"active\">";
					echo "<th>";
					echo "<h3 class=\"text-left text-primary\">Groupe</h3>";
					echo "</th>";
					echo "<th>";
					echo "<a href=\"http://localhost/covoit/page_groupe.php?idGroupe=$idGroupe\"><h3 class=\"text-left text-primary\">$nomGroupe</h3></a>";
					echo "</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
					echo "<tr class=\"active\">";
					echo "<td>";
					echo "<h5>Chef : </h5>";
					echo "<h5>Voiture: </h5>";
					echo "<h5>Départ : </h5>";
					echo "<h5>Arrivée : </h5>";
					echo "<h5>Places restantes :</h5>";
					echo "</td>";
					echo "<td>";
					echo "<h5>$prenomChef $nomChef ($pseudoChef)</h5>";
					echo "<h5>$marqueVoiture $nomVoiture $couleurVoiture</h5>";
					echo "<h5>$depart</h5>";
					echo "<h5>$arrivee</h5>";
					echo "<h5>$nbPers/$nbPlaces</h5>";
					echo "</td>";
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}
			}
			else {
				include('echecRecherche.php');
			}
		}
	}
?>