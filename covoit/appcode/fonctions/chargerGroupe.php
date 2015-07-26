<?php
	include('classe_groupe.php');
	
	if (isset($_GET['idGroupe'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
		
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$id = $_GET['idGroupe'];
			
			include('chargerGroupe1.php');
			
			mysqli_close($conn);
		}
	}
?>