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
							<div data-role="page"  id="pageEspacePerso">
								<div class="content" data-role="content">
									<tr>
										<h3 class="text-left text-primary">Vos informations sont :</h3>
										<h5>Votre adresse : <?php echo $user->getAdresse(); ?></h5>
										<h5>Votre adresse d'arrivée : <?php echo "NON GERE" ?></h5>
										<h5>Votre type de voiture : <?php echo "NON GERE" ?></h5>
										<h5>Votre email : <?php echo $user->getMail(); ?></h5>
									</tr>
									<tr>
										<h3 class="text-left text-primary">Votre profil est :</h3>
										<h5>Musique : NON GERE</h5>
										<h5>Fumee : NON GERE</h5>
										<h5>Discussion : NON GERE</h5>
										<h5>Possibilite de faire un stop : NON GERE</h5>
									</tr>
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