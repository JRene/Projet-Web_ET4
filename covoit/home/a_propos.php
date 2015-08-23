<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
	<head>
		<meta charset="utf-8" />
		<title>Polycar : A propos</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href=$icone_polycar />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css' />";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
		<!--<script src="/appcode/jquery-1.11.3.js"></script>-->
		<script type="text/javascript">
			$(document).ready(function() {
				$('.scrollTo').click( function() { // Au clic sur un élément
					var page = $(this).attr('href'); // Page cible
					var speed = 750; // Durée de l'animation (en ms)
					$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
					return false;
				});
			});

			$(document).ready(function() {
				$('.scrollTo').click( function() { // Au clic sur un élément
					var page = $(this).attr('href'); // Page cible
					var speed = 750; // Durée de l'animation (en ms)
					$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
					return false;
				});
			});
		</script>
		<!-- <div id="fb-root"></div> -->
		<script>
			(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.4";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			!function(d,s,id){
			var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
			if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>
		<script type="text/javascript">
			function redirigerSelonPage() {
			}
		</script>
	</head>	
	<body>
		<?php include($root . $part_header); ?>
		<div class="jumbotron">	
			<div id="page-1">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="col-md-4">
							<table class="table table-bordered" border width=30% height=300>
								<thead>
									<th class="text-center">Vous êtes conducteur ?</th>
								</thead>
								<tbody>
									<tr class="active">
									<th>
									<p> 
										<FONT face="Arial" size="3">
											Vous possédez une voiture, et vous avez des places libres? Vous vous sentez concerné par l'avenir de la planète, ou vous voulez simplement un peu de campagnie sur vos trajet ? N'hésitez plus...
										</FONT>
									<p>
									<a id="modal-212826" href="#modal-container-212826" role="button" class="btn" data-toggle="modal"> Rejoignez-nous !</a>
			
									<div class="modal fade" id="modal-container-212826" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							 
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														X
													</button>
													<h4 class="modal-title" id="myModalLabel2">
														Info conducteurs
													</h4>
												</div>
												<div class="modal-body">
													Rajouter les infos conducteurs
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">
														Fermer
													</button> 
												</div>
											</div>
					
										</div>
									</div>
									</tr>
									</th>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<table class="table table-bordered" border width=60% height=300>
								<thead>
									<th class="text-center">Vous êtes piéton ?</th>
								</thead>
								<tbody>
									<tr class="active">
									<th>
									<p> 
										<FONT face="Arial" size="3"> 
										Vous êtes piéton, et vous avez besoin de faire une course urgente, de trouver une voiture pour déménager ou juste qu'on vous dépose quelque part ? Pas de problème, nous avons la solution qui vous convient !
										</FONT>
									</p>
									<a id="modal-212827" href="#modal-container-212827" role="button" class="btn" data-toggle="modal">Inscrivez-vous !</a>
									<div class="modal fade" id="modal-container-212827" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
							 
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														X
													</button>
													<h4 class="modal-title" id="myModalLabel">
														Besoin d'un conducteur ?
													</h4>
												</div>
												<div class="modal-body">
													<p> Renseignez les informations qui vous correspondent et trouvez votre groupe !  
													<?php echo "<img alt='40x40' src=$image_recherche_groupe />"; ?>
												</div>
												<div class="modal-footer">
													<?php echo "<a href=$page_nouveau_pieton type='button' class='btn btn-default' >"; ?>
														Accéder à la page des groupes
													</a> 
													<button type="button" class="btn btn-default" data-dismiss="modal">
														Fermer
													</button> 
												</div>
											</div>
										</div>
									</div>
									</tr>
									</th>
								</tbody>
							</table>
						</div>
						<div class="col-md-4">
							<table class="table table-bordered" border width=60% height=300>
								<thead>
									<th class="text-center"> Aidez-nous ! </th>
								</thead>
								<tbody>
									<tr class="active">
									<th>
									<p> 
										<FONT face="Arial" size="3"> 
										Vous aimez le concept de notre site?Vous le trouvez utile et pensez qu'il pourrait plaire à d'autres personnes ? N'hésitez donc pas à le faire tourner, ce site n'a d'utilité que s'il y a des étudiants qui s'en servent ! 
										</FONT>
									</p>
									<a id="modal-212828" href="#modal-container-212828" role="button" class="btn" data-toggle="modal">En savoir plus</a>
									<div class="modal fade" id="modal-container-212828" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
														X
													</button>
													<h4 class="modal-title" id="myModalLabel">
														Aidez-nous !
													</h4>
												</div>
												<div class="modal-body">
													Si ce site vous a été utile, n'hésitez pas à en faire profiter vos amis !
												</div>
												<div class="modal-footer">
													<div class="fb-share-button" data-href="https://polycar.fr" data-layout="button"></div>
													<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://polycar.fr" data-text="Inscrivez-vous sur Polycar, le nouveau site de covoiturage de Polytech Paris Sud ! http://polycar.fr">Tweet</a>
													<button type="button" class="btn btn-default" data-dismiss="modal">
														Fermer
													</button> 
												</div>
											</div>
										</div>
									</div>
									</tr>
									</th>
								</tbody>
							</table>
						</div><br><br><br>
						<p class="text-center">
							<a type = "button" class="scrollTo" href="#page-2">A propos de l'équipe</a>
						</p>
					</div>
				</div>
			</div>
		</div><!-- /page-1 -->
			<div id="page-2">
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-4 column">
							<?php echo "<img alt='140x140' src=$photo_julien class='img-circle' />"; ?>
							<h3>Julien René</h3>
							<p>Conducteur prudent depuis plus de trois ans et amateur de courses automobiles.</p>
						</div>
						<div class="col-md-4 column">
							<?php echo "<img alt='140x140' src=$photo_narjiss class='img-circle' />"; ?>
							<h3>Narjiss Aissaoui</h3>
							<p>Amoureuse de la nature et écolo dans l'âme, elle n'hésite pas à squatter la voiture de ses amis dès que possible.</p>
						</div>
						<div class="col-md-4 column">
							<?php echo "<img alt='140x140' src=$photo_fatah class='img-circle' />"; ?>
							<h3>Abdoul Fatah</h3>
							<p>Il a le permis (ne vous inquiétez pas, il conduit bien en plus)...</p>
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