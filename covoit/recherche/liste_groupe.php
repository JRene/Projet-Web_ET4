<!DOCTYPE html>

<html lang="fr">
	<?php
		require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php');
		session_start();
	?>
    <head>
		<meta charset="utf-8" />
		<title>Polycar : recherche</title>
		<?php
			echo "<link rel='shortcut icon' type='image/x-icon' href='$icone_polycar' />";
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<script src='$jquery' type='text/javascript'></script>";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
			echo "<script src='$common_functions_js' type='text/javascript'></script>";
			echo "<script src='$bootstrap_js' type='text/javascript'></script>";
		?>
	</head>
	<script type="text/javascript">
		function redirigerSelonPage() {
			rediriger();
		}
	</script>
	<body>
		<?php include ($root . $part_header); ?>
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-12 column">		
					<div class="jumbotron">
						<div class="container">
							<div class="row clearfix">
								<div class="col-md-9 column">
									<h2 class="text-left text-primary">Recherche de groupe</h2>
								</div>
							</div>
						</div>
						<?php include('listerGroupes.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>