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
		<!-- <div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">		
					<div class="jumbotron"> -->
						<section id="section" class="section text-image-section nav-overlayimage-background dark-section layout-left no-image fp-section fp-table active" style="background-image: url(&quot;/images/polytech.jpg&quot;); background-size: cover; height: 750px; padding: 0px;">
							<div class="fp-tableCell" style="height: 750px;">
								<div style="position: relative; overflow: hidden; width: auto; height: 100%;" class="slimScrollDiv">
									<div style="overflow: hidden; width: auto; height: 100%;" class="fp-scrollable">
										<div class="overlay" style="height: 100%; background-color: #FFFFFF; opacity:0.4; filter:alpha(opacity=40); ">
										</div>
										<div class="container" style="position: relative; top: -750px;">
											<div style="padding-top: 90px; padding-bottom: 90px;" class="section-entry">
											    <div class="text-image-wrapper">
											        <div class="col-md-6 text-cell">
           												<div class="text-layout-inner">
															<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="v-item title">
											   					<h2>Laissez votre voiture devant chez vous</h2>
															</div>
															<hr style="visibility: inherit; opacity: 1; width: 100px;" class="v-item title-divider" data-width="100px">
															<div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="v-item content">
															    <p>Chaque matin, des dizaines d'étudiants viennent en voiture : une pollution quotidienne non négligeable que l'on pourrait réduire significativement.</p>
															</div>
															<!-- <div style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" class="section-buttons v-item"><a href="https://www.youtube.com/watch?v=7rYWEg7bIWc" class="play no-ajaxy themewich-lightbox tiny-details button-1" title="Play Video">
																<span class="play-button has-text"></span>Play Video</a>
															</div> -->
														</div>
										            	<div class="clear"></div>
										        	</div>
													<div class="clear"></div>
												</div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</section>
<!-- 					</div>
				</div>
			</div>
		</div>
	</body> -->
</html>