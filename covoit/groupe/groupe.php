<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="proj.css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="jquery.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-7 column">
							<a href="http://localhost/covoit/page_trouvertrajet.php"><img alt="140x140" src="images/final1.jpg" /></a>
						</div>
						<?php include('header.php'); include('chargerGroupe.php'); ?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-3 column">
									</div>
									<div class="col-md-9 column">
									</div>
								</div>
							</div>
							<div data-role="page"  id="pageProfilGroup">
								<div class="content" data-role="content">
									<tr>
										<h3 class="text-left text-primary">Groupe : <?php echo $groupe->getNom() ?></h3>
										<h5>Chef : <?php echo $chef->getPrenom() . " " . $chef->getNom() . " (" . $chef->getPseudo() . ")"; ?></h5>
										<h5>Membres :</h5>
										<?php include('listerMembres.php'); ?>
										<?php include('afficherVoiture.php'); ?>
										<h5>Départ : <?php echo $groupe->getDepart(); ?></h5>
										<h5>Arrivée : <?php echo $groupe->getArrivee(); ?></h5>
										<h5>Infos sur le groupe : <?php echo $groupe->getInfo(); ?></h5>
										<?php include('afficherHoraire.php'); ?>
									</tr>
									</br>
									</br>
									<div>
										<input type='submit' value='Rejoindre' name='rejoindre'  class="btn btn-primary btn-lg" >
									</div>
									<div>
										<input type='submit' value='Quitter' name='quitter'  class="btn btn-primary btn-lg" >
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