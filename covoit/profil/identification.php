<!DOCTYPE html>

<html lang="fr">
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php'); ?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : identification</title>
		<?php
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
		?>
		<script type="text/javascript">
			function checkRemember() {
				if (document.cookie.indexOf('usermail=') != -1) {
					document.getElementById("mailUtilisateur").value = "test";
					document.getElementById("chkRemember").checked = true;
				} else {
					document.getElementById("mailUtilisateur").value = "";
					document.getElementById("chkRemember").checked = false;
				}
			}
		</script>
	</head>
	<body onload="checkRemember()">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="row clearfix">
						<div class="col-md-7 column">
							<?php echo "<a href=$page_trouver_un_trajet><img alt='140x140' src=$logo_polycar /></a>"; ?>							
						</div>
						<?php include($root . $part_header1); ?>
					</div>
				</div>
			</div>
			<div id="divFormulaire" class="container" style="display : block;">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<?php echo "<form role='form' method='POST' action=$fonction_identification>"; ?>
								<div class="form-group">
									 <label for="mailUtilisateur">Adresse mail u-psud</label>
									 <input type="email" class="form-control" name="mailUtilisateur" id="mailUtilisateur" />
								</div>
								<div class="form-group">
									 <label for="mdpUtilisateur">Mot de passe</label>
									 <input type="password" class="form-control" name="mdpUtilisateur" id="mdpUtilisateur" />
								</div>
								<div class="checkbox">
									 <label><input type="checkbox" name="chkRemember" id="chkRemember"/>Se souvenir de moi</label>
								</div>
								<button type="submit" class="btn btn-default">Connexion</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="divSuccess" class="container" style="display: none;">
				<div class="row clearfix">
					<div class="col-md-12 column">		
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-12 column"></br></br>
										<h3 class="text-center text-primary" id="reussite">Identification réussie !</h3>
										<div class="row clearfix">
											<div class="col-md-4 column">
												<a href="page_profil.php" type="button" class="btn btn-primary btn-lg" id="bt_profil">Aller vers son profil</a>
											</div>
										</div>
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