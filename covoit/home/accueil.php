<!DOCTYPE html>

<html lang="fr">
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php'); ?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : accueil</title>
		<?php
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$jquery' type='text/javascript'></script>";
		?>
	</head>
	<body>
		<?php include ($root . $part_header); ?>
		<div class="container">
			<div class="jumbotron">				
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel slide" id="carousel-706482">
								<ol class="carousel-indicators">
									<li class="active" data-slide-to="0" data-target="#carousel-706482">
									</li>
									<li data-slide-to="1" data-target="#carousel-706482">
									</li>
									<li data-slide-to="2" data-target="#carousel-706482">
									</li>
								</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img alt="Carousel Bootstrap First" src="/images/carou1.jpg" />
									<div class="carousel-caption">
									<p>
										Vous en avez de marre des transports en commun? N'attendez plus, inscrivez-vous sur Polycar, le site de covoiturage qui vous correspond !
									</p>
									</div>
								</div>
								<div class="item">
									<img alt="Carousel Bootstrap Second" src="images/carou2.jpg" />
									<div class="carousel-caption">
									<p>
										Vous êtes conducteurs mais vous voulez de la compagnie pendant vos trajets récurrents? Trouvez des compagnons de route grâce à Polycar !
									</p>
									</div>
								</div>
								<div class="item">
									<img alt="Carousel Bootstrap Third" src="images/carou3.jpg" />
									<div class="carousel-caption">
									<p>
										Chaque matin, des dizaines d'étudiants viennent en voiture : une pollution quotidienne non négligeable que l'on pourrait réduire significativement. Faites un geste pour la planète, choisissez Polycar.
									</p>
									</div>
								</div>
							</div> 
								<a class="left carousel-control" href="#carousel-706482" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-706482" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="col-md-12 column">
				<div class="col-md-2 column">
				</div>			
				<div class="col-md-2 column">
					<img src="images/loca.jpg">
					<h3> <font face="Calibri">TRAJET</font></h3>
					<p> <font face="Calibri" size=3 > Choisissez le point de départ et d'arrivée que vous voulez. </font> </p>
				</div>
				<div class="col-md-2 column">
					<img src="images/ami.jpg" align="center">
					<h3> <font face="Calibri">RENCONTRE</font></h3>
					<p> <font face="Calibri" size=3 > Plus on est de fous dans la voiture, plus on s'amuse, et plus on se fait d'amis ! </font> </p>
				</div>
				<div class="col-md-2 column">
					<img src="images/profil.jpg">
					<h3> <font face="Calibri">PROFIL</font></h3>
					<p> <font face="Calibri" size=3 > Photo, description... Mettez toutes les chances de votre côté pour qu'on vous reconnaisse. </font> </p>
				</div>
				<div class="col-md-2 column">
					<img src="images/argent.jpg">
					<h3> <font face="Calibri">GRATUITÉ</font></h3>
					<p> <font face="Calibri" size=3 > Nous n'acceptons que votre satisfaction comme payement </font> </p>
				</div>
			</div>
		</div>
	</body>
</html>