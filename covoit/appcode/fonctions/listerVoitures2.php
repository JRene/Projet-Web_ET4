<!-- Obsolète -->

<?php
	include ($root . '/appcode/fonctions/chargerVoitures.php');
	
	if (isset($garage) && count($garage)) {
		echo "<ul>";
		foreach($garage as $v) {
			$id = $v->getId();
			$marque = $v->getMarque();
			$nom = $v->getNom();
			$couleur = $v->getCouleur();
			$infos = $v->getInfo();
			$nbPlaces = $v->getNbPlaces();

			echo "<li><h4>Voiture : $marque $nom $couleur ($nbPlaces places)</h5></li>";
			echo "<ul><li><h5>Informations sur la voiture : $infos</h5></li></ul>";
		}
		echo "</ul>";
	}
?>