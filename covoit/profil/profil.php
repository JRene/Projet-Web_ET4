<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : profil</title>
		<?php
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
		?>
		<link rel="stylesheet" href="proj.css" />
	</head>
	<body>
		<div class="container">
			<?php include($root . $part_header); ?>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-3 column">
										<img alt="140x140" class="img-circle" <?php echo 'src="/images/' . $_SESSION['idUtilisateur'] . '.jpg"'; ?>/>
									</div>
									<div class="col-md-9 column">
										<?php include($root . '/appcode/fonctions/bonjour_profil.php'); ?>
									</div>
								</div>
							</div>
							<div data-role="page"  id="pageEspacePerso">
								<div class="content" data-role="content">
									<table>
										<tr>
											<h3 class="text-left text-primary">Vos informations :</h3>
											<h5>Votre adresse : <?php echo $user->getAdresse(); ?></h5>
											<h5>Votre email : <?php echo $user->getMail(); ?></h5>
											<h5>Votre année : <?php echo $user->getAnnee(); ?></h5>
											<h5>Votre spécialité : <?php echo $user->getSpecialite(); ?></h5>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos voitures :</h3>
											<?php include ('listerVoitures2.php'); ?>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos trajets préférés :</h3>
											<?php include ('listerTrajets.php'); ?>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos préférences :</h3>
											<h5>Musique : NON GERE</h5>
											<h5>Fumee : NON GERE</h5>
											<h5>Discussion : NON GERE</h5>
											<h5>Possibilite de faire un stop : NON GERE</h5>
										</tr>
									</table>
									</br>
									</br>
									<div>
										<input type='submit' value='Modifier' name='valider'  class="btn btn-primary btn-lg" id="bt_piet"/>
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