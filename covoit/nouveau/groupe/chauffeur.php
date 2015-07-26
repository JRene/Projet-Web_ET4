<!DOCTYPE html>

<html lang="fr">
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
							<a href="http://localhost/covoit/page_trouvertrajet.php"><img alt="140x140" src="images/final1.jpg" /></a>
						</div>
						<?php include('header.php'); ?>
					</div>
				</div>
			</div>
		</div>		
		<div class="contenu">
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<h3 class="text-center text-primary" id="trajet">Création de groupe</h3>
							<form method='POST' action='creerGroupe.php'>
								<table class=''>
									<tr>
										<td>Nom du groupe</td>
										<td>
											<input type='text' name='nomGroupe'  size='30' maxlength='45' required="required"/>
										</td>
									</tr>
									<tr>
										<div id="date">
											<label for="dateF">Date de depart: &nbsp &nbsp &nbsp &nbsp  </label>
											<input type='date' name="dateDepart" id="dateDepart" size='10' maxlength='10' value="12/12/2050">
										</div> 
										<td>Chemin récurrent</td>
										<td><input type='radio' class="Regulier" name='regulier' value='1' checked>oui</td>
										<td><input type='radio' class="Regulier" name='regulier' value='0'>non</td>
									</tr>
									<tr>
										<td></br>Lieu de départ</td>
										<td>
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
										<td>
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
										<td>
											<select name="voiture" required="required">
												<?php include('listerVoitures1.php'); ?>
												<option value="ajouter" selected>Ajouter voiture</option>
											</select>
										</td>
									</tr>
									<tr>
										<td></br>Contribution</td>
										<td>
											<input type='text' name='contribution'  size='30' maxlength='45'/>
										</td>
									</tr>
									<tr>
										<td><label for="infos"></br>Informations</label></td>
										<td><textarea name="infos" id="infos" rows="5" cols="50" placeholder="Informations supplémentaires sur l'organisation du groupe"></textarea></td>
									</tr>
									<tr>
										<td></br>Trajet effectué avec musique</td>
										<td></br>
											<input type='radio' name='musique' value='oui'>oui
										</td>
										<td></br>
											<input type='radio' name='musique' value='non'>non
										</td>
										<td></br>
											<input type='radio' name='musique' value='indifferent'>indifferent
										</td>
									</tr>
									<tr>
										<td></br>Possibilité de fumer</td>
										<td></br>
											<input type='radio' name='fumee' value='oui'>oui
										</td>
										<td></br>
											<input type='radio' name='fumee' value='non'>non
										</td>
										<td></br>
											<input type='radio' name='fumee' value='indifferent'>indifferent
										</td>
									</tr>
									<br>
									<tr>
										<td></br>Frequence de discussion</td>
										<td></br>
											<input type='radio' name='discussion' value='normale'>normale
										</td>
										<td></br>
											<input type='radio' name='discussion' value='passionee'>passionee &nbsp
										</td>
										<td></br>
											<input type='radio' name='discussion' value='discrete'>discrete
										</td>
									</tr>
									<tr>
										<td></br>Possibilite de faire un stop avant destination &nbsp </td>
										<td></br>
										   <input type='radio' name='stop' value='oui'>oui
										</td>
										<td></br>
											<input type='radio' name='stop' value='non'>non
										</td>
										<td></br>
											<input type='radio' name='stop' value='indifferent'>indifferent
										</td>
									</tr>
								</table>
								<br>
								<div class="container">
									<div class="row clearfix">
										<div class="col-md-3 column">
										</div>
										<div class="col-md-4 column">
											 <input type='submit' value='Valider' name='valider' class="btn btn-primary btn-lg" id="bt_chauff" >
										</div>
										<div class="col-md-5 column">
											 <input type='reset' value='Reset tout' name='annuler'  class="btn btn-primary btn-lg" id="bt_piet" >
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