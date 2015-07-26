<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
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
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-12 column">
										<form method="POST" role="form" action="inscription.php" enctype="multipart/form-data">
											<div class="form-group">
												<label>Votre prénom</label>
												<input  type='text' class="form-control" name="prenom"  pattern=".{2,45}" required="required"/>
											</div>
											<div class="form-group">
												<label>Votre nom</label>
												<input  type='text' class="form-control" name="nom"  pattern=".{2,45}" required="required"/>
											</div>
											<div class="form-group">
												<input type="hidden" name="MAX_FILE_SIZE" value="100000">
												<label for="avatar">Votre photo</label><input type="file" name="avatar">
											</div>
											<div class="form-group">
												<label>Niveau scolaire</label> 
												<select name="niveau" required="required">
													<option value="Peip1" selected>Peip1</option>
													<option value="Peip2">Peip2</option>
													<option value="Et3">Et3</option>
													<option value="Et4">Et4</option>
													<option value="Et5">Et5</option>
												</select>
											</div>
											<div class="form-group">
												<label>Spécialité</label>
												<select name="specialite" required="required">
													<option value="info" selected>Informatique</option>
													<option value="elec">Electronique</option>
													<option value="mate">Matériaux</option>
													<option value="optr">Optronique</option>
												</select>
											</div>
											<div class="form-group">
												 <label for="exampleInputEmail1">Adresse u-psud</label>
												 <input type="email" name="mail" class="form-control" id="exampleInputEmail1" />
											</div>
											<div class="form-group">
												<label>Choisir un pseudo</label>
												<input  type='text' name="pseudo" class="form-control" id="pseudo"  pattern=".{5,15}" required="required" placeholder="Entre 5 et 15 caractères"/>
											</div>
											<div class="form-group">
												 <label for="exampleInputPassword1">Choisir un mot de passe</label>
												 <input type="password" name="mdp" class="form-control" id="exampleInputPassword1" />
											</div>
											<button type="submit" class="btn btn-default">Envoyer</button>
										</form>
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