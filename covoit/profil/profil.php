<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
		require_once($root . $fonction_chargerUtilisateur);
	?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : profil</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href='$icone_polycar' />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
		<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet" />
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
					voitureBoutonI.className = "fa fa-cog"; // Ajouter fa-spin pour que l'engrenage tourne
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

			function updateUtilisateurAJAX(type) {
				var xhr = getXMLHttpRequest();

				var values = document.getElementsByName(type);
				var value = "0";
				for (var i = 0; i < values.length; i++){
					if (values[i].checked){
						value = values[i].value;
					}
				}

				xhr.open("POST", "<?php echo $fonction_updateUtilisateur; ?>", true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send("type=" + type + "&value=" + value + "&user=<?php echo urlencode(serialize($user)); ?>");
			}

			function miniFormulaire(type) {
				var mfMusique = document.getElementById("musique");
				var mfFumee = document.getElementById("fumee");
				var mfDiscussion = document.getElementById("discussion");
				var mfStop = document.getElementById("stop");

				switch (type) {
					case "musique" :
						document.getElementById("aMusique").onclick = function() {
							hideMiniFormulaire();
						};
						mfMusique.innerHTML = "<form method=\"POST\" onsubmit=\"updateUtilisateurAJAX('musique');\">" +
							"<input type=\"radio\" name=\"musique\" value=\"1\">Oui </input>" +
							"<input type=\"radio\" name=\"musique\" value=\"0\">Non </input>" +
							"<button type='submit' class='btn btn-default'>OK</button>" +
							"</form>";
						mfFumee.innerHTML = "";
						mfDiscussion.innerHTML = "";
						mfStop.innerHTML = "";
						break;
					case "fumee" :
						document.getElementById("aFumee").onclick = function() {
							hideMiniFormulaire();
						};
						mfMusique.innerHTML = "";
						mfFumee.innerHTML = "<form method=\"POST\" onsubmit=\"updateUtilisateurAJAX('fumee');\">" +
							"<input type=\"radio\" name=\"fumee\" value=\"1\">Oui </input>" +
							"<input type=\"radio\" name=\"fumee\" value=\"0\">Non </input>" +
							"<button type='submit' class='btn btn-default'>OK</button>" +
							"</form>";
						mfDiscussion.innerHTML = "";
						mfStop.innerHTML = "";
						break;
					case "discussion" :
						document.getElementById("aDiscussion").onclick = function() {
							hideMiniFormulaire();
						};
						mfMusique.innerHTML = "";
						mfFumee.innerHTML = "";
						mfDiscussion.innerHTML = "<form method=\"POST\" onsubmit=\"updateUtilisateurAJAX('discussion');\">" +
							"<input type=\"radio\" name=\"discussion\" value=\"1\">Oui </input>" +
							"<input type=\"radio\" name=\"discussion\" value=\"0\">Non </input>" +
							"<button type='submit' class='btn btn-default'>OK</button>" +
							"</form>";
						mfStop.innerHTML = "";
						break;
					case "stop" :
						document.getElementById("aStop").onclick = function() {
							hideMiniFormulaire();
						};
						mfMusique.innerHTML = "";
						mfFumee.innerHTML = "";
						mfDiscussion.innerHTML = "";
						mfStop.innerHTML = "<form method=\"POST\" onsubmit=\"updateUtilisateurAJAX('stop');\">" +
							"<input type=\"radio\" name=\"stop\" value=\"1\">Oui </input>" +
							"<input type=\"radio\" name=\"stop\" value=\"0\">Non </input>" +
							"<button type='submit' class='btn btn-default'>OK</button>" +
							"</form>";
						break;
					default :
						break;
				}
			}

			function hideMiniFormulaire() {
				document.location.replace("<?php echo $page_profil; ?>");
			}

			function redirigerSelonPage() {
				rediriger();
			}
		</script>
	</head>
	<body onload="chargementProfilAJAX();">
		<?php include($root . $part_header); ?>
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
																	<a href="#modal-container-212827" role="button" class="btn btn-default" id="bt_ajout" data-toggle="modal">Ajouter</a>
																</div>
																<div class="modal fade" id="modal-container-212827" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																	<div class="modal-dialog">
																		<?php echo "<form method='POST' action='$fonction_creerVoiture'>"; ?>
																		<div class="modal-content">
																			<div class="modal-header">
																				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																					X
																				</button>
																				<h4 class="modal-title" id="myModalLabel">
																					Ajouter voiture
																				</h4>
																			</div>
																			<div class="modal-body">
																				<p> Marque : <input type='text' name='marqueVoiture' maxlength='45' style='float: right; width: 100%'/>
																				</p>
																				<p> Nom : <input type='text' name='nomVoiture' maxlength='45' style='float: right; width: 100%'/>
																				</p>
																				<p> Couleur : <input type='text' name='couleurVoiture' maxlength='45' style='float: right; width: 100%'/>
																				</p>
																				<p> Nombre places : <input type='text' name='nbPlacesVoiture' maxlength='45' style='float: right; width: 100%'/>
																				</p>
																				<p> Infos supplémentaires : <input type='text' name='infoVoiture' maxlength='45' style='float: right; width: 100%'/>
																				</p>													
																			</div>
																			<div class="modal-footer">
																				<input type='submit' value='Ajouter' name='valider' class="btn btn-default" >
																				<button type="button" class="btn btn-default" data-dismiss="modal">
																					Fermer
																				</button> 
																			</div>
																		</div>
																		</form>
																	</div>
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
																<ul>
																	<li><a id="aMusique" onclick="miniFormulaire('musique');"><i class="fa fa-cog"></i></a> Musique : <span id="musique"><?php if ($user->getMusique()) echo "J'aime écouter de la musique en conduisant."; else echo "La musique me gène lorsque je conduis."; ?></span></li>
																	<li><a id="aFumee" onclick="miniFormulaire('fumee');"><i class="fa fa-cog"></i></a> Fumée : <span id="fumee"><?php if ($user->getTabac()) echo "La fumée ne me dérange pas."; else echo "La fumée me dérange."; ?></span></li>
																	<li><a id="aDiscussion" onclick="miniFormulaire('discussion');"><i class="fa fa-cog"></i></a> Discussion : <span id="discussion"><?php if ($user->getDiscussion()) echo "J'aime discuter en conduisant."; else echo "Je ne discute pas lorsque je conduis."; ?></span></li>
																	<li><a id="aStop" onclick="miniFormulaire('stop');"><i class="fa fa-cog"></i></a> Possibilite de faire un stop : <span id="stop"><?php if ($user->getStop()) echo "Je peux faire des arrêts."; else echo "Je vais directement à destination."; ?></span></li>
																</ul>
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