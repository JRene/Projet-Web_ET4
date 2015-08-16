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
			function  getCookie(name){
			     if(document.cookie.length == 0)
			       return null;

			     var regSepCookie = new RegExp('(; )', 'g');
			     var cookies = document.cookie.split(regSepCookie);

			     for(var i = 0; i < cookies.length; i++){
			       var regInfo = new RegExp('=', 'g');
			       var infos = cookies[i].split(regInfo);
			       if(infos[0] == name){
			         return unescape(infos[1]);
			       }
			     }
			     return null;
			   }

			function checkRemember() {
				if (document.cookie.indexOf('usermail=') != -1) {
					document.getElementById("mailUtilisateur").value = getCookie("usermail");
					document.getElementById("chkRemember").checked = true;
				} else {
					document.getElementById("mailUtilisateur").value = "";
					document.getElementById("chkRemember").checked = false;
				}
			}

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

			function identificationAJAX(callback) {
				var xhr = getXMLHttpRequest();

				xhr.onreadystatechange= function() {
					if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
						callback(xhr.responseXML);
				    }
				};

				xhr.open("POST", "/appcode/fonctions/identification.php", true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send("mailUtilisateur=" + document.getElementById("mailUtilisateur").value +
				 "&mdpUtilisateur=" + document.getElementById("mdpUtilisateur").value + 
				 "&chkRemember=" + document.getElementById("chkRemember").checked);
			}

			function checkConnection(result) {
				var nodes = result.getElementsByTagName("item");
				
				if (nodes[0].getAttribute("acceptConnection") == "true") {
					divFormulaire.style.display = "none";
					divSuccess.style.display = "block";
				} else {
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
							<?php echo "<form role='form' method='POST' onsubmit='identificationAJAX(checkConnection); return false;'>"; ?>
							<!-- <form role='form' method='POST' > -->
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