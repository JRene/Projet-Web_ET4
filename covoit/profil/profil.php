<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : profil</title>
		<?php
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link rel='shortcut icon' type='image/x-icon' href=$icone_polycar />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/proj.css" />
		<script type="text/javascript">
			function chargementProfilAJAX() {
				chargementVoituresAJAX(listerVoitures);
				chargementTrajetsAJAX();
			}

			function chargementVoituresAJAX(callback) {
				var xhr = getXMLHttpRequest();

				xhr.onreadystatechange= function() {
					if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
						callback(xhr.responseXML);
					}
				};

				xhr.open("POST", "<?php echo $fonction_chargerVoitures; ?>", true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send("idUtilisateur=<?php echo $_SESSION['idUtilisateur']; ?>");
			}

			function chargementTrajetsAJAX() {
				var xhr = getXMLHttpRequest();

				xhr.onreadystatechange= function() {
					if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
						listerTrajets(xhr.responseXML);
				    }
				};

				xhr.open("POST", "<?php echo $fonction_chargerTrajets; ?>", true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send("idUtilisateur=<?php echo $_SESSION['idUtilisateur']; ?>");
			}

			function listerVoitures(result) {
				var nodes = result.getElementsByTagName("voiture");
				var listeVoitures = document.getElementById("listeVoitures");

				for (var i = 0; i < nodes.length; i++) {
					var idVoiture = nodes[i].getAttribute("id");
					var marqueVoiture = nodes[i].getAttribute("marque");
					var nomVoiture = nodes[i].getAttribute("nom");
					var couleurVoiture = nodes[i].getAttribute("couleur");
					var infoVoiture = nodes[i].getAttribute("info");
					var nbPlacesVoiture = nodes[i].getAttribute("nbPlaces");
					var urlPhotoVoiture = nodes[i].getAttribute("urlPhoto");

					var voitureNode = document.createElement("li");
					var voitureTitleNode = document.createElement("h4");
					var voitureTitleTextNode = document.createTextNode("Voiture : " + marqueVoiture + " " + nomVoiture + " " + couleurVoiture + "  ");
					var voitureBoutonA = document.createElement("a");
					var voitureBoutonI = document.createElement("i");
					voitureBoutonI.className = "fa fa-cog fa-spin";
					voitureBoutonA.href = "#";
					voitureBoutonA.appendChild(voitureBoutonI);

					var voitureDetailNode = document.createElement("ul");
					var voitureDetail2Node = document.createElement("li");
					var voitureDetail3Node = document.createElement("h5");
					var voitureDetailTextNode = document.createTextNode("Informations sur la voiture : " + infoVoiture);
					voitureDetail3Node.appendChild(voitureDetailTextNode);
					voitureDetail2Node.appendChild(voitureDetail3Node);
					voitureDetailNode.appendChild(voitureDetail2Node);
					voitureTitleNode.appendChild(voitureTitleTextNode);
					voitureTitleNode.appendChild(voitureBoutonA);
					voitureNode.appendChild(voitureTitleNode);
					voitureNode.appendChild(voitureDetailNode);
					listeVoitures.appendChild(voitureNode);
				}
			}

			function listerTrajets(result) {
				var nodes = result.getElementsByTagName("trajet");
				var listeTrajets = document.getElementById("listeTrajets");

				for (var i = 0; i < nodes.length; i++) {
					var idTrajet = nodes[i].getAttribute("id");
					var departTrajet = nodes[i].getAttribute("depart");
					var arriveeTrajet = nodes[i].getAttribute("arrivee");
					var infoTrajet = nodes[i].getAttribute("info");

					var trajetNode = document.createElement("li");
					var trajetTextNode = document.createTextNode(departTrajet + " - " + arriveeTrajet);
					trajetTextNode.appendChild(trajetNode);
					listeTrajet.appendChild(trajetNode);
				}
			}

			function redirigerSelonPage() {
				rediriger();
			}
		</script>
	</head>
	<body onload="chargementProfilAJAX();">
		<?php include($root . $part_header); ?>
		<?php include_once($root . $fonction_chargerUtilisateur); ?>
		<div class="container">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-3 column">
										<?php echo "<img alt='140x140' width='150' height='150' class='img-circle' src='/images/" . $_SESSION["idUtilisateur"] . ".jpg' />"; ?>
									</div>
									<div class="col-md-9 column">
										<?php echo "<h2 class='text-center text-primary'>Bonjour " . $_SESSION["prenomUtilisateur"] . " " . $_SESSION["nomUtilisateur"] . " (" . $_SESSION["pseudoUtilisateur"] . ") !</h2>"; ?>
								
										<div data-role="page"  id="pageEspacePerso">
											<div class="content" data-role="content">
									
											<div class="panel-group" id="panel-357806">
												<div class="panel panel-default">
													<div class="panel-heading">
														<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-357806" href="#panel-element-818053">Vos informations</a>
													</div>
													<div id="panel-element-818053" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>
															<li>Votre adresse : <?php echo $user->getAdresse(); ?> </li>
															<li>Votre email : <?php echo $user->getMail(); ?> </li>
															<li>Votre année : <?php echo $user->getAnnee(); ?> </li>
															<li>Votre spécialité : <?php echo $user->getSpecialite(); ?></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														<a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-357806" href="#panel-element-818054">Vos voitures</a>
													</div>
													<div id="panel-element-818054" class="panel-collapse collapse">
														<div class="panel-body">
															<ul id="listeVoitures">
															</ul>
																</br>
															<div>
																<input type='submit' value='Ajouter' name='valider'  class="btn btn-default" id="bt_piet"/>
															</div>
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														 <a class="panel-title" data-toggle="collapse" data-parent="#panel-357806" href="#panel-element-818055">Vos trajets préférés</a>
													</div>
													<div id="panel-element-818055" class="panel-collapse collapse">
														<div class="panel-body">
														<input type='submit' value='Ajouter' name='valider'  class="btn btn-default" id="bt_piet" />
														</div>
													</div>
												</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														 <a class="panel-title" data-toggle="collapse" data-parent="#panel-357806" href="#panel-element-818056">Vos préférences</a>
													</div>
													<div id="panel-element-818056" class="panel-collapse collapse">
														<div class="panel-body">
															<li>Musique : NON GERE</li>
															<li>Fumee : NON GERE</li>
															<li>Discussion : NON GERE</li>
															<li>Possibilite de faire un stop : NON GERE</li>					
														</div>
													</div>
												</div>
											</div>
											</div>
										</div>
									</div>
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