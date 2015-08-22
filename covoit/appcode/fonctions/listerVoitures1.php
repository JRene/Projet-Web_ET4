<?php
	include($root . '/appcode/fonctions/chargerVoitures.php');
	
	foreach ($garage as $v) {
		$id = $v->getId();
		$marque = $v->getMarque();
		$nom = $v->getNom();
		$couleur = $v->getCouleur();
		
		echo "<option value=\"$id\">$marque $nom $couleur</option>";
	}
?>