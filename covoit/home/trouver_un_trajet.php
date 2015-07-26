<!DOCTYPE html>

<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="style.css" rel="stylesheet" type="text/css" />
		<script src="jquery.js"></script>
		<script src="lib.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-7 column">
							<img alt="140x140" src="images/final1.jpg" />
						</div>
						<?php include('header.php'); ?>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<div class="light">
					<div id="calendar-wrap" class="box">
						<div id="calendar">
							<h4 id="calendar-title"> </h4>
							<ul id="controls">
								<li class="sep"><a href="#" id="btn-theme">light</a></li>
								<li><a href="#" id="btn-previous">&laquo;</a></li>
								<li>Mois</li>
								<li><a href="#" id="btn-next">&raquo;</a></li>
							</ul>
							<div class="clear"> </div>
							<h5 id="time"> </h5>
							<table id="tablec">
								<thead>
								</thead>
								<tbody>
								</tbody>
							</table>
							<div class="clear"> </div>
							<h3 id="stats"></h3>
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
					</div>
					<div id="diary-wrap" class="box">
						<div class="content">
							<a href="#" id="diary-close" class="round">&laquo;</a>
							<h4 id="diary-title">&nbsp;</h4>
							<div class="clear"> </div>
							<ul id="diary"></ul>
						</div>
					</div>
					<div id="dialog">
						<a href="#" id="dialog-close" class="round">&times;</a>
						<form id="add" class="target">
							<h3 id="event-date"></h3>
							<p class="time">
								<select id="event-hour"></select>
								<select id="event-minute"></select>
							</p>
							<p>
								<label>Event description</label>
								<input type="text" id="event-description" maxlength="100" />
							</p>
							<div id="event-label"></div>
							<p class="buttons">
								<input type="submit" id="event-create" value="ok" class="button" />
								<input type="button" id="event-close" value="annuler" class="button" />
								<input type="button" id="event-delete" value="effacer" class="button" />
								<input type="button" id="event-tweet" value="partager" class="button" />
							</p>
						</form>
					</div>
				</div>
				<div class="container">
					<div class="row clearfix">
						<div class="col-md-12 column"></br></br>
							<h3 class="text-center text-primary" id="trajet">Je fais le trajet en tant que :</h3>
							<div class="row clearfix">
								<div class="col-md-3 column">
								</div>
								<div class="col-md-4 column">
									 <a <?php if (isset($_SESSION['idUtilisateur'])) echo "href=\"page_chauffeur.php\""; else echo "href=\"page_identification.php\""; ?> type="button" class="btn btn-primary btn-lg" id="bt_chauff">Chauffeur</a>
								</div>
								<div class="col-md-5 column">
									 <a href="page_pieton.php" type="button" class="btn btn-primary btn-lg" id="bt_piet">Piéton</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear">
				</div>
			</div>
		</div>
	</body>
</html>