<?php
	session_start();
	if (isset($_SESSION['idUtilisateur'])) {
		header("Content-Type: text/xml");
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		echo "<root>";
		echo "<item connected=\"true\"/>";
		echo "</root>";
	} else {
		header("Content-Type: text/xml");
		echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
		echo "<root>";
		echo "<item connected=\"false\"/>";
		echo "</root>";
	}
?>