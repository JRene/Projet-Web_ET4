<?php
	session_start();
	if (isset($_SESSION["idUtilisateur"])) {
		session_destroy();
	}
?>