<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.scrollTo').click( function() { // Au clic sur un élément
					var page = $(this).attr('href'); // Page cible
					var speed = 750; // Durée de l'animation (en ms)
					$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
					return false;
				});
			});
		</script>
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
			<div class="jumbotron">	
				<div id="page-1">
					<div class="row clearfix">
						<div class="col-md-12 column">
							<h1>Bonjour à toi, polycopain !</h1>
							<p>Moi, si je dois résumer ma vie aujourd'hui avec vous, je dirais que c'est d'abord des rencontres. Des gens qui m'ont tendu la main, peut-être à un moment où je ne pouvais pas, où j'étais seul chez moi. Et c'est curieux de se dire que les hasards, les rencontres forgent une destinée... Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l'interlocuteur en face je dirais, le miroir qui vous aide à avancer. Alors ce n'est pas mon cas, comme je disais là, puisque moi au contraire, j'ai pu : et je dis merci à la vie, je lui dis merci, je chante la vie, je danse la vie... Je ne suis qu'amour ! Et finalement, quand beaucoup de gens me disent "Mais comment fais-tu pour avoir cette humanité ?", je leur réponds très simplement, je leur dis que c'est ce goût de l'amour qui m'a poussé aujourd'hui à entreprendre une construction mécanique, mais demain qui sait ? Peut-être seulement à me mettre au service de la communauté, à faire le don, le don de soi...</p>
							<p>
								<a type = "button" class="scrollTo" href="#page-2">En Savoir Plus</a>
							</p>
						</div>
					</div>
				</div>
			</div><!-- /page-1 -->
			<div id="page-2">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-4 column">
							<img alt="140x140" src="images/julien.jpg" class="img-circle" />
							<h3>Julien René</h3>
							<p> Conducteur prudent depuis plus de trois ans et amateur de courses automobiles. </p>
						</div>
						<div class="col-md-4 column">
							<img alt="140x140" src="images/narjiss.jpg" class="img-circle" />
							<h3>Narjiss Aissaoui</h3>
							<p>Amoureuse de la nature et écolo dans l'âme, elle a le permis marocain mais ne sait pas conduire, c'est pour cela qu'elle n'hésite pas à squatter la voiture de ses amis dès que possible et shotgun toujours la place de devant.</p>
						</div>
						<div class="col-md-4 column">
							<img alt="140x140" src="images/fatah.jpg" class="img-circle" />
							<h3>Abdoul Fatah</h3>
							<p>Il a le permis (ne vous inquiétez pas, il conduit)...</p>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-md-12 column">
						</div>
					</div>
				</div>
			</div><!-- /page-2 -->
		</div>	
	</body>
</html>