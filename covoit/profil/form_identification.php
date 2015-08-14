<!-- Obsolète -->

<?php
	if(!isset($_COOKIE['usermail'])) {
		include('form_identification1.php');
	}
	else {
		include('form_identification2.php');
	}
?>