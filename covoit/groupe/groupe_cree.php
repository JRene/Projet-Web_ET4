<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
		require_once($root . $fonction_chargerUtilisateur);
	?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : profil</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href='$icone_polycar' />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
	</head>
	<body>
		<?php include($root . $part_header); ?>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">		
					<div class="jumbotron">
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-12 column"></br></br>
									<h3 class="text-center text-primary" id="reussite">Le groupe a été créé avec succès !</h3>
									<div class="row clearfix">
										<div class="col-md-4 column">
											<a href="page_profil.php" type="button" class="btn btn-primary btn-lg" id="bt_profil">Aller vers son profil</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>