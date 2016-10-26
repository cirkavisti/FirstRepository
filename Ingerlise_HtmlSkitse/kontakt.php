<?php require 'templates/Header.php'; ?>
<?php require 'templates/SidebarMenu.php'; ?>
<?php require 'templates/Breadcrumb.php'; ?>
<?php require 'templates/Footer.php'; ?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Inger Lise Rasmussen</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<div class="page-wrapper">
		<?php
			writeHeader('Kontakt'); // output the header element
			// writeMsg('Visti prøver argumentet!');
		?>
		<div class="content-wrapper">
			<div class="grid">
				<div class="col-3-4 floatLeft"><?php // Breadcrumbs(''); ?>&nbsp;</div>
				<div class="col-1-4 floatLeft txtRight"><p>hep</p></div>
			</div>
			<div class="grid">
				<!-- sidebar column -->
				<div class="col-1-4 floatLeft">
					<!-- <h2>Galleri</h2> -->
					<?php writeSideMenu('Rå Rum'); ?>
				</div>
				<!-- main column -->
				<div class="col-3-4 floatLeft">
					<div class="txtCol">
						<h2>Inger Lise Rasmussen</h2>
						<p>Sjællandsgade 135<br>
						8000 Aarhus C</p>
						<p>+45 20373003<br>
						ingerlise.rasmussen@gmail.com</p>
					</div>
				</div>


			</div> <!-- end of grid -->
		</div>

		<?php writeFooter(); ?>
	</div>
</body>
</html>