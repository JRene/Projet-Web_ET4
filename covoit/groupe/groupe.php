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
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
						
						
							<div data-role="page"  id="pageProfilGroup">
								<div class="content" data-role="content">
									
									<div class="col-md-12 column">
										<h3 class="text-center text-primary">Groupe : <?php echo $groupe->getNom() ?></h3>
									</div>
										
									<div class="col-md-12 column">		
										<div class="col-md-6 column">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														Chef
													</h3>
												</div>
												<div class="panel-body">
														<?php echo $chef->getPrenom() . " " . $chef->getNom() . " (" . $chef->getPseudo() . ")"; ?>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														Membres
													</h3>
												</div>
												<div class="panel-body">
														<?php include('listerMembres.php'); ?> 
														<?php include('afficherVoiture.php'); ?>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														Départ
													</h3>
												</div>
												<div class="panel-body">
												<?php echo $groupe->getDepart(); ?>
												</div>
											</div>
										</div>	
										<div class="col-md-6 column">
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														Arrivée
													</h3>
												</div>
												<div class="panel-body">
												<?php echo $groupe->getArrivee(); ?>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h3 class="panel-title">
														Infos sur le groupe
													</h3>
												</div>
												<div class="panel-body">
														<?php echo $groupe->getInfo(); ?>
												</div>
											</div>
										</div>
									</div>
									</br>
									</br>
									<div class="col-md-12 column">
										<div align="center">
											<input type='submit' value='Rejoindre' name='rejoindre'  class="btn btn-primary btn-lg" > &nbsp &nbsp
											<input type='submit' value='&nbsp &nbsp Quitter &nbsp ' name='quitter'  class="btn btn-primary btn-lg" >
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