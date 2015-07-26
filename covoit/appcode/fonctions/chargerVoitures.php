<?php
	if (isset($_SESSION['idUtilisateur'])) {
		$conn = mysqli_connect("localhost", "root", "", "polycar");
	
		if (!$conn) {
			die("Connection failed : " . mysqli_connect_error());
		}
		else {
			$idUtilisateur = $_SESSION['idUtilisateur'];
			
			include('chargerVoitures1.php');
			
			mysqli_close($conn);
		}
	}
?>