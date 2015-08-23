<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
	<head>
		<meta charset="utf-8" />
		<title>Polycar : recherche de groupe</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href='$icone_polycar' />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
		<link rel="stylesheet" href="proj.css" />
		<script type="text/javascript">
			function redirigerSelonPage() {
				rediriger();
			}
		</script>
	</head>
	<body onload="rediriger();">
		<?php include($root . $part_header); ?>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
				<form method='POST' action='page_listegroupes.php'>
					<div class="jumbotron">
						<div class="contenu">
							<div class="container">
							
								<div class="row clearfix">
									<div class="col-md-12 column">
										<h3 class="text-center text-primary" id="trajet">Recherche de groupe</h3>
									</div>
								</div>
							</div>
							
								<div class="col-md-12 column">		
									<div class="col-md-6 column">
										<table border="0">
												<tr>	
												<td><label for="dateF">Date de depart: &nbsp &nbsp &nbsp &nbsp </label></td>
												<td><input  type='date' name='j' id="dateF" size='10' maxlength='10' value="12/12/2050"></td>
												</tr>
												<tr> 
													<td></br>Chemin recurrent</td></br>
													<td></br> &nbsp <input type='radio' class="Regulier" name='regulier' value='1' checked> oui &nbsp &nbsp &nbsp &nbsp <input type='radio' class="Regulier" name='regulier' value='0'> non</td>
													</td>
												</tr>
														 
												<tr>
													<td></br>Lieu de départ &nbsp &nbsp &nbsp </td>
													<td></br>
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
												</tr> </br>
												<tr>
													<td></br>Horaire de départ &nbsp &nbsp &nbsp </td>
													<td></br>
														<input  type='time' name='horaire'  size='30' maxlength='45' value="10:10">
													</td>
												</tr> </br>
												<tr>
													<td></br>Lieu d'arrivee </td>
													<td> </br>
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
										</table>
									</div>
										</br> </br> </br>
										<label for="note"></br>Notes</label>
										</br><textarea name="Note" id="Note" rows="5" cols="50" placeholder="Description de votre trajet (distance approximative, etc)"></textarea></td>
								</div>
										<div class="container">
											<div class="row clearfix">
												</br> </br> </br> 
												<div class="col-md-12 column">
														<div align="center">
														 <input type='submit' value='Valider' name='valider' class="btn btn-primary btn-lg" id="bt_chauff" >
														 <input type='reset' value='Réinitialiser' name='annuler'  class="btn btn-primary btn-lg" id="bt_piet" >
														</div>
												</div>
											</div>
										</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>