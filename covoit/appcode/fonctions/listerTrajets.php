<?php
	include ('chargerTrajets.php');
	
	if (isset($trajets) && count($trajets)) {
		echo "<ul>";
		foreach($trajets as $t) {
			$depart = $t->getDepart();
			$arrivee = $t->getArrivee();
			$info = $t->getInfo();
			
			echo "<li>$depart - $arrivee</li>";
		}
		echo "</ul>";
	}
?>