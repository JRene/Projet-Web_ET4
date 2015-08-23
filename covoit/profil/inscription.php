<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
	<head>
		<meta charset="utf-8" />
		<title>Polycar : inscription</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href=$icone_polycar />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css' />";
		?>
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

			function inscriptionAJAX() {
				var xhr = getXMLHttpRequest();

				xhr.onreadystatechange= function() {
					if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
						checkConnection(xhr.responseXML);
				    }
				};

				xhr.open("POST", "<?php echo $fonction_sinscrire; ?>", true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send("mailUtilisateur=" + document.getElementById("mailUtilisateur").value +
				 "&mdpUtilisateur=" + document.getElementById("mdpUtilisateur").value + 
				 "&prenomUtilisateur=" + document.getElementById("prenomUtilisateur").value + 
				 "&nomUtilisateur=" + document.getElementById("nomUtilisateur").value + 
				 "&pseudoUtilisateur=" + document.getElementById("pseudoUtilisateur").value + 
				 "&specialiteUtilisateur=" + document.getElementById("specialiteUtilisateur").value + 
				 "&niveauUtilisateur=" + document.getElementById("niveauUtilisateur").value);
			}

			function checkConnection(result) {
				var nodes = result.getElementsByTagName("item");

				if (nodes[0].getAttribute("signedIn") == "true") {
					divFormulaire.style.display = "none";
					divSuccess.style.display = "block";
					verifierSessionAJAX(checkConnected);
				}
			}
			
			function redirigerSelonPage() {
			}
		</script>
	</head>
	<body>
		<?php include($root . $part_header); ?>
		<div class="container">
			<div id="divFormulaire" class="container" style="display: block;">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-12 column">
										<a href="/profil/identification.php"><div align="right">Déjà inscrit ? Connectez-vous !</div></a>
										<form method="POST" role="form" enctype="multipart/form-data" onsubmit="inscriptionAJAX(); return false;">
											<div class="form-group">
												<label for="prenomUtilisateur">Votre prénom</label>
												<input  type='text' class="form-control" name="prenomUtilisateur" id="prenomUtilisateur" pattern=".{2,45}" required="required"/>
											</div>
											<div class="form-group">
												<label for="nomUtilisateur">Votre nom</label>
												<input  type='text' class="form-control" name="nomUtilisateur" id="nomUtilisateur" pattern=".{2,45}" required="required"/>
											</div>
											<div class="form-group">
												<input type="hidden" name="MAX_FILE_SIZE" value="100000">
												<label for="avatar">Votre photo</label><input type="file" name="avatar">
											</div>
											<div class="form-group">
												<label for="niveauUtilisateur">Niveau scolaire</label> 
												<select name="niveauUtilisateur" id="niveauUtilisateur" required="required">
													<option value="Peip1" selected>Peip1</option>
													<option value="Peip2">Peip2</option>
													<option value="Et3">Et3</option>
													<option value="Et4">Et4</option>
													<option value="Et5">Et5</option>
												</select>
											</div>
											<div class="form-group">
												<label for="specialiteUtilisateur">Spécialité</label>
												<select name="specialiteUtilisateur" id="specialiteUtilisateur" required="required">
													<option value="info" selected>Informatique</option>
													<option value="elec">Electronique</option>
													<option value="mate">Matériaux</option>
													<option value="optr">Optronique</option>
												</select>
											</div>
											<div class="form-group">
												 <label for="mailUtilisateur">Adresse u-psud</label>
												 <input type="email" name="mailUtilisateur" class="form-control" id="mailUtilisateur" />
											</div>
											<div class="form-group">
												<label for="pseudoUtilisateur">Choisir un pseudo</label>
												<input  type='text' name="pseudoUtilisateur" class="form-control" id="pseudoUtilisateur"  pattern=".{5,15}" required="required" placeholder="Entre 5 et 15 caractères"/>
											</div>
											<div class="form-group">
												 <label for="mdpUtilisateur">Choisir un mot de passe</label>
												 <input type="password" name="mdpUtilisateur" class="form-control" id="mdpUtilisateur" />
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
			<div id="divSuccess" class="container" style="display: none;">
				<div class="row clearfix">
					<div class="col-md-12 column">		
						<div class="jumbotron">
							<div class="container">
								<div class="row clearfix">
									<div class="col-md-12 column"></br></br>
										<h3 class="text-center text-primary" id="reussite">Inscription réussie !</h3>
										<div class="row clearfix">
											<div class="col-md-4 column">
												<?php echo "<a href=$page_profil type='button' class='btn btn-primary btn-lg' id='bt_profil'>Aller vers mon profil</a>"; ?>
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