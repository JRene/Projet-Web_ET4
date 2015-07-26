<?php
	session_start();
	if (isset($_SESSION['idUtilisateur'])) {
		include('header2.php');
	}
	else {
		include('header1.php');
	}
?>