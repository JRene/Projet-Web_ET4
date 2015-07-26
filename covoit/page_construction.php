<!DOCTYPE html>

<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="jquery.js"></script>
		<script src="lib.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-7 column">
							<a href="http://localhost/covoit/page_trouvertrajet.php"><img alt="140x140" src="images/final1.jpg" /></a>
						</div>
						<?php include('header.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">		
					<div class="jumbotron">
						<div class="row clearfix">
							<div class="col-md-12 column">
								<div class="col-md-2 column"></br>
									<img alt="140x140" width="140" height="140" src="images/julien.jpg" class="img-circle" />			
								</div>
								<div class="col-md-10 column">

								<table class="table" width="20">
									<thead>
										<tr class ="active">
											<th>
												Groupe
											</th>
											<th>
												nom du groupe php<?php echo $info_group["nomG"]; ?>
											</th>
											
										</tr>
									</thead>
									<tbody>
										<tr class="active">
											<td>
											<h5>Chef: </h5>
											<h5>Membres : </h5>
											<h5>Voiture: </h5>
											<h5>Départ : </h5>
											<h5>Arrivée : </h5>
											<h5>Places restantes:</h5>
											</td>
											
											<td>
											<h5>php chef <?php echo $info_group["chef"]; ?></h5>
											<h5>php membres <?php echo $info_group["membre"]; ?></h5>
											<h5>php voiture<?php echo $info_group["voiture"]; ?></h5>
											<h5>php depart <?php echo $info_group["adresse"]; ?><?php echo $info_group["cp"]; ?>,<?php echo $info_group["ville"]; ?></h5>
											<h5>php arrivee<?php echo $info_group["adresseR"]; ?><?php echo $info_group["cpR"]; ?>,<?php echo $info_group["villeR"]; ?></h5>
											<h5> php places restantes</h5>
											</td>
										</tr>
										
									</tbody>
								</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>