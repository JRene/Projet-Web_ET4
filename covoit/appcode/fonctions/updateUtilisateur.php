<?php
	if (isset($_POST['type']) && isset($_POST['value']) && isset($_POST['user'])) {
		$type = $_POST['type'];
		$value = $_POST['value'];
		$user = unserialize(urldecode($_POST['user']));

		switch ($type) {
			case "musique" :
				$user->updateMusique($value);
				break;
		}
	}
?>