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

	function verifierSessionAJAX() {
		var xhr = getXMLHttpRequest();

		xhr.onreadystatechange= function() {
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
				checkConnected(xhr.responseXML);
		    }
		};

		xhr.open("POST", "<?php echo $fonction_verifierSession; ?>", true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send();
	}


	function checkConnected(result) {
		var nodes = result.getElementsByTagName("item");

		if (nodes[0].getAttribute("connected") == "true") {
			document.getElementById("header_link1").href = "<?php echo $page_trouver_un_trajet; ?>";
			document.getElementById("header_link1").text = "<?php echo $string_trouver_un_trajet; ?>";
			document.getElementById("header_link2").href = "<?php echo $page_profil; ?>";
			document.getElementById("header_link2").text = "<?php echo $string_profil; ?>";
			document.getElementById("header_link3").href = "#";
			document.getElementById("header_link3").text = "<?php echo $string_deconnexion; ?>";
			document.getElementById("header_link3").onclick = function() {
				deconnexionAJAX();
			};
			document.getElementById("header_link4").href = "<?php echo $page_a_propos; ?>";
			document.getElementById("header_link4").text = "<?php echo $string_a_propos; ?>";
		} else {
			document.getElementById("header_link1").href = "<?php echo $page_trouver_un_trajet; ?>";
			document.getElementById("header_link1").text = "<?php echo $string_trouver_un_trajet; ?>";
			document.getElementById("header_link2").href = "<?php echo $page_identification; ?>";
			document.getElementById("header_link2").text = "<?php echo $string_identification; ?>";
			document.getElementById("header_link3").href = "<?php echo $page_inscription; ?>";
			document.getElementById("header_link3").text = "<?php echo $string_inscription; ?>";
			document.getElementById("header_link3").removeAttribute("onclick");
			document.getElementById("header_link4").href = "<?php echo $page_a_propos; ?>";
			document.getElementById("header_link4").text = "<?php echo $string_a_propos; ?>";
		}
	}

	function deconnexionAJAX() {
		var xhr = getXMLHttpRequest();

		xhr.onreadystatechange= function() {
			if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
				verifierSessionAJAX(checkConnected);
		    }
		};

		xhr.open("GET", "<?php echo $fonction_deconnecter; ?>?return_url=" + window.location.href, true);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		xhr.send();
	}
</script>
<div class="row clearfix">
	<div class="col-md-12 column">
		<div class="row clearfix">
			<div class="col-md-7 column">
				<?php echo "<a href=$page_trouver_un_trajet><img alt='140x140' src=$logo_polycar /></a>"; ?>							
			</div>
			<div class="col-md-5 column">
				<ul class="breadcrumb">
					<li>
						<a id="header_link1"></a>
					</li>
					<li>
						<a id="header_link2"></a>
					</li>
					<li>
						<a id="header_link3"></a>
					</li>
					<li>
						<a id="header_link4"></a>
					</li>
				</ul>
			</div>				
		</div>
	</div>
</div>
<script type="text/javascript">
	verifierSessionAJAX();
</script>