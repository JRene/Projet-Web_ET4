<!DOCTYPE html>

<html>
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
						<div class="col-md-6 column">
							<a href="http://localhost/covoit/accueil.php"><img alt="140x140" src="images/final1.jpg" /></a>
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
						<div class="contenu">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-12 column">
										<h3 class="text-center text-primary" id="trajet">Profil piéton </h3>
									</div>
								</div>
							</div>
							<form method='POST' action=''>
								<table class=''>
									<tr>
										<td>Chemin recurrent</td></br>
										<td><input type='radio' class="Regulier" name='regulier' value='1' checked> oui</td>
										<td><input type='radio' class="Regulier" name='regulier' value='0'> non</td>
										<div id="date">
											<label for="dateF">Date de depart: &nbsp &nbsp &nbsp &nbsp </label>
											<input  type='date' name='j' id="dateF" size='10' maxlength='10' value="12/12/2050">
										</div> 
									</tr>          
									<tr>
										<td></br>Lieu de départ &nbsp &nbsp </td>
										<td></br>
											<input  type='text' name='depart'  size='30' maxlength='45' required="required">
										</td>
									</tr>
									<tr>
										<td></br>Code postal de départ &nbsp &nbsp </td>
										<td></br>
											<input  type='num' name='cp'  size='50' maxlength='100' required="required">
										</td>
									</tr>
									<tr>
										<td></br>Ville de départ &nbsp &nbsp </td>
										<td></br>
											<input  type='text' name='ville'  size='30' maxlength='45' required="required" >
										</td>
									</tr>
									<tr>
										<td></br>Horaire de départ &nbsp &nbsp </td>
										<td></br>
											<input  type='time' name='horaire'  size='30' maxlength='45' required="required">
										</td>
									</tr>
									<tr>
										<td></br>Adresse d'arrivee </td>
										<td></br>
											<input  type='text' name='arrivee'  size='30' maxlength='45' >
										</td>
									</tr>
									<tr>
										<td></br>Code postal arrivee &nbsp &nbsp </td>
										<td></br>
											<input  type='num' name='cpR'  size='50' maxlength='100' >
										</td>
									</tr>
									<tr>
										<td></br>Ville arrivee </td>
										<td></br>
											<input  type='text' name='villeR'  size='30' maxlength='45'  >
										</td>
									</tr>  
									<tr>
										<td><label for="note"></br>Notes</label></td></br></br>
										<td></br><textarea name="Note" id="Note" rows="5" cols="50" placeholder="Description de votre trajet (distance approximative, etc)"></textarea></td>
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
											 <input type='reset' value='Réinitialiser' name='annuler'  class="btn btn-primary btn-lg" id="bt_piet" >
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