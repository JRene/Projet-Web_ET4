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
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css' />";
		?>
		<link rel="stylesheet" href="proj.css" />
		<script type="text/javascript">
			function getXMLHttpRequest() {
			    var xhr = null;

			    if (window.XMLHttpRequest || window.ActiveXObject) {
			        if (window.ActiveXObject) {
			            try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch(e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
			        } else {
			            xhr = new XMLHttpRequest(); 
			        }
			    } else {
			        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");

			        return null;
			    }

			    return xhr;
			}

			function chargementProfilAJAX() {
				chargementVoituresAJAX();
				chargementTrajetsAJAX();
			}

			function chargementVoituresAJAX() {
				var xhr = getXMLHttpRequest();

				xhr.onreadystatechange= function() {
					if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
						listerVoitures(xhr.responseXML);
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
					var voitureTitleTextNode = document.createTextNode("Voiture : " + marqueVoiture + " " + nomVoiture + " " + couleurVoiture);
					var voitureDetailNode = document.createElement("ul");
					var voitureDetail2Node = document.createElement("li");
					var voitureDetail3Node = document.createElement("h5");
					var voitureDetailTextNode = document.createTextNode("Informations sur la voiture : " + infoVoiture);
					voitureDetail3Node.appendChild(voitureDetailTextNode);
					voitureDetail2Node.appendChild(voitureDetail3Node);
					voitureDetailNode.appendChild(voitureDetail2Node);
					voitureTitleNode.appendChild(voitureTitleTextNode);
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
										<?php echo "<img alt='140x140' class='img-circle' src='/images/" . $_SESSION["idUtilisateur"] . ".jpg' />"; ?>
									</div>
									<div class="col-md-9 column">
										<?php echo "<h2 class='text-center text-primary'>Bonjour " . $_SESSION["prenomUtilisateur"] . " " . $_SESSION["nomUtilisateur"] . " (" . $_SESSION["pseudoUtilisateur"] . ") !</h2>"; ?>
									</div>
								</div>
							</div>
							<div data-role="page"  id="pageEspacePerso">
								<div class="content" data-role="content">
									<table>
										<tr>
											<h3 class="text-left text-primary">Vos informations :</h3>
											<h5>Votre adresse : <?php echo $user->getAdresse(); ?></h5>
											<h5>Votre email : <?php echo $user->getMail(); ?></h5>
											<h5>Votre année : <?php echo $user->getAnnee(); ?></h5>
											<h5>Votre spécialité : <?php echo $user->getSpecialite(); ?></h5>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos voitures :</h3>
											<ul id="listeVoitures"></ul>
											<div>
												<input type='submit' value='Ajouter' name='valider'  class="btn btn-primary btn-lg" id="bt_piet"/>
											</div>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos trajets préférés :</h3>
											<ul id="listeTrajets"></ul>
											<div>
												<input type='submit' value='Ajouter' name='valider'  class="btn btn-primary btn-lg" id="bt_piet"/>
											</div>
										</tr>
										<tr>
											<h3 class="text-left text-primary">Vos préférences :</h3>
											<h5>Musique : NON GERE</h5>
											<h5>Fumee : NON GERE</h5>
											<h5>Discussion : NON GERE</h5>
											<h5>Possibilite de faire un stop : NON GERE</h5>
										</tr>
									</table>
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