<?php
	include ('chargerHoraire.php');
	
	if (isset($recurrent)){
		echo "<h4 class=\"text-left text-primary\">Jours et heures de départ :</h4>";
		$heure = $recurrent->getHeure();
		if ($recurrent->getLundi())
			echo "<h5 class=\"text-left text-primary\">Lundi, $heure</h5>";
		if ($recurrent->getMardi())
			echo "<h5 class=\"text-left text-primary\">Mardi, $heure</h5>";
		if ($recurrent->getMercredi())
			echo "<h5 class=\"text-left text-primary\">Mercredi, $heure</h5>";
		if ($recurrent->getJeudi())
			echo "<h5 class=\"text-left text-primary\">Jeudi, $heure</h5>";
		if ($recurrent->getVendredi())
			echo "<h5 class=\"text-left text-primary\">Vendredi, $heure</h5>";
		if ($recurrent->getSamedi())
			echo "<h5 class=\"text-left text-primary\">Samedi, $heure</h5>";
		if ($recurrent->getDimanche())
			echo "<h5 class=\"text-left text-primary\">Dimanche, $heure</h5>";
		
	}
	else if (isset($ponctuel)) {
		echo "<h4 class=\"text-left text-primary\">Date et heure de départ :</h4>";
		$date = $ponctuel->getDate();
		$heure = $ponctuel->getHeure();
		echo "<h5 class=\"text-left text-primary\">$date, $heure</h5>";
	}
?>