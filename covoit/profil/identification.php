<!DOCTYPE html>

<html lang="fr">
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/appcode/fonctions/variables.php'); ?>
    <head>
		<meta charset="utf-8" />
		<?php
			echo "<link href='$style' rel='stylesheet' type='text/css' />";
			echo "<link href='$bootstrap' rel='stylesheet' type='text/css'>";
		?>
	</head>
	<body>
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
			<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="jumbotron">
							<?php include('form_identification.php'); ?>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</body>
</html>