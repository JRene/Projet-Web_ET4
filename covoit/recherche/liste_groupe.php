<!DOCTYPE html>

<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<script src="jquery.js"></script>
		<title>Polycar : liste des groupes</title>
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
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-9 column">
									<h2 class="text-left text-primary">Recherche de groupe</h2>
								</div>
							</div>
						</div>
						<?php include('listerGroupes.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>