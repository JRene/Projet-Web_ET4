<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
	<head>
		<meta charset="utf-8" />
		<title>Polycar : création de groupe</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href='$icone_polycar' />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
		<script type="text/javascript">
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

					var option = document.createElement("option");
					var optionText = document.createTextNode(marqueVoiture + " " + nomVoiture + " " + couleurVoiture);
					option.value = idVoiture;
					option.appendChild(optionText);
					listeVoitures.appendChild(option);
				}
			}

			function redirigerSelonPage() {
				rediriger();
			}
		</script>
	</head>
	<body onload="rediriger(); chargementVoituresAJAX(listerVoitures);">
		<?php include($root . $part_header); ?>
		<div class="contenu">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<h3 class="text-center text-primary" id="trajet">Création de groupe</h3>
							<form method='POST' action='creerGroupe.php'>
								<table>
									<tr>
										<td>Nom du groupe</td>
										<td colspan="3">
											<input type='text' name='nomGroupe'  size='30' maxlength='45' required="required"/>
										</td>
									</tr>
									<tr> 
										<div id="date">
											<td></br><label for="dateF">Date de depart: &nbsp &nbsp &nbsp &nbsp  </label></td>
											<td colspan="3"></br><input type='date' name="dateDepart" id="dateDepart" size='10' maxlength='10' value="12/12/2050"></td>
										</div>
									</tr>
									<tr>
										<td></br>Chemin récurrent</td>
										<td colspan="3"></br>
											<form>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='oui'>Oui</input>
												</span>
												<input type='radio' name='musique' value='non'>Non</input>
											</form>
										</td>
									</tr>
									<tr>
										<td></br>Lieu de départ</td>
										<td colspan="3">
											<select name="depart" required="required">
												<option value="polytech" selected>Polytech Paris-Sud (Orsay)</option>
												<option value="pacaterie">La Pacaterie (Orsay)</option>
												<option value="fleming">Fleming (Orsay)</option>
												<option value="rives">Les Rives de l'Yvette (Bures-sur-Yvette)</option>
												<option value="edc">Emilie du Châtelet (Gif-sur-Yvette)</option>
												<option value="bosquet">Le Bosquet (Les Ulis)</option>
												<option value="autre">Autre</option>
											</select>
										</td>
									</tr>
									<tr>
										<td></br>Lieu d'arrivee</td>
										<td colspan="3">
											<select name="arrivee" required="required">
												<option value="polytech" selected>Polytech Paris-Sud (Orsay)</option>
												<option value="pacaterie">La Pacaterie (Orsay)</option>
												<option value="fleming">Fleming (Orsay)</option>
												<option value="rives">Les Rives de l'Yvette (Bures-sur-Yvette)</option>
												<option value="edc">Emilie du Châtelet (Gif-sur-Yvette)</option>
												<option value="bosquet">Le Bosquet (Les Ulis)</option>
												<option value="autre">Autre</option>
											</select>
										</td>
									</tr>
									<tr>
										<td></br>Voiture</td>
										<td colspan="3">
											<select id="listeVoitures" required="required">
												<option value="ajouter" selected>Ajouter voiture</option>
											</select>
										</td>
									</tr>
									<tr>
										<td></br>Contribution</td>
										<td colspan="3">
											<input type='text' name='contribution'  size='30' maxlength='45'/>
										</td>
									</tr>
									<tr>
										<td><label for="infos"></br>Informations</label></td>
										<td colspan="3">
											<textarea name="infos" id="infos" rows="5" cols="50" placeholder="Informations supplémentaires sur l'organisation du groupe"></textarea>
										</td>
									</tr>
									<tr>
										<td></br>Trajet effectué avec musique</td>
										<td colspan="3"></br>
											<form>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='oui'>Oui</input>
												</span>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='non'>Non</input>
												</span>
												<input type='radio' name='musique' value='indifferent'>Indifférent</input>
											</form>
										</td>
									</tr>
									<tr>
										<td></br>Possibilité de fumer</td>
										<td colspan="3"></br>
											<form>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='oui'>Oui</input>
												</span>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='non'>Non</input>
												</span>
												<input type='radio' name='musique' value='indifferent'>Indifférent</input>
											</form>
										</td>
									</tr>
									<br>
									<tr>
										<td></br>Ouvert à la discussion</td>
										<td colspan="3"></br>
											<form>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='oui'>Oui</input>
												</span>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='non'>Non</input>
												</span>
												<input type='radio' name='musique' value='indifferent'>Indifférent</input>
											</form>
										</td>
									</tr>
									<tr>
										<td></br>Possibilite de faire un stop avant destination &nbsp </td>
										<td colspan="3"></br>
											<form>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='oui'>Oui</input>
												</span>
												<span style="padding-right: 50px;">
													<input type='radio' name='musique' value='non'>Non</input>
												</span>
												<input type='radio' name='musique' value='indifferent'>Indifférent</input>
											</form>
										</td>
									</tr>
								</table>
								<br>
								<div class="container">
									<div class="row clearfix">
										<div align="center">										
											 <input type='submit' value='Valider' name='valider' class="btn btn-primary btn-lg" id="bt_chauff" ></input>
											 <input type='reset' value='Réinitialiser' name='annuler'  class="btn btn-primary btn-lg" id="bt_piet" ></input>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>