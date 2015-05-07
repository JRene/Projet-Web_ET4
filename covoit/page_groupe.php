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
							<a href="http://localhost/covoit/accueil.html"><img alt="140x140" src="images/final1.jpg" /></a>
						</div>
						<?php include('header.php'); ?>
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
										<img alt="140x140" class="img-circle" <?php echo 'src="images/' . $_SESSION['idUtilisateur'] . '.jpg"'; ?>/>
									</div>
									<div class="col-md-9 column">
										<?php include('bonjour_profil.php'); ?>
									</div>
								</div>
							</div>
							<div data-role="page"  id="pageProfilGroup">
								<div class="content" data-role="content">
									<tr>
										<h3 class="text-left text-primary">Les informations du groupe sont :</h3>
										<h5>Nom du groupe: <?php echo $info_group["nomG"]; ?></h5>
										<h5>Chef: <?php echo $info_group["chef"]; ?></h5>
										<h5>Membres : <?php echo $info_group["membre"]; ?></h5>
										<h5>Voiture: <?php echo $info_group["voiture"]; ?></h5>
										<h5>Départ : <?php echo $info_group["adresse"]; ?><?php echo $info_group["cp"]; ?>,<?php echo $info_group["ville"]; ?></h5>
										<h5>Arrivée : <?php echo $info_group["adresseR"]; ?><?php echo $info_group["cpR"]; ?>,<?php echo $info_group["villeR"]; ?></h5>
										<h5>Infos sur le groupe : <?php echo $profils["infoG"]; ?></h5>
										<h5>Date et heure de départ:<?php echo $info_group["dateF"];?></h5>
									</tr>
									</br>
									</br> 
									<div>
										<input type='submit' value='Quitter' name='valider'  class="btn btn-primary btn-lg" >
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