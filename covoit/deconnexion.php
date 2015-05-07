<?php
	session_start();
	if (isset($_SESSION['idUtilisateur'])) {
		session_destroy();
	}
	header('Location: http://localhost/covoit/page_apropos.php');
?>