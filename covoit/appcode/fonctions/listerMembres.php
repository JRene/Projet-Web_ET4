<?php
	if (isset($membres) && count($membres)) {
		echo "<ul>";
		foreach($membres as $m) {
			$prenom = $m->getPrenom();
			$nom = $m->getNom();
			$pseudo = $m->getPseudo();
			
			echo "<li>$prenom $nom ($pseudo)</li>";
		}
		echo "</ul>";
	}
?>