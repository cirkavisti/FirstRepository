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
			writeHeader('CV'); // output the header element
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
					<h2>Curriculum Vitae</h2>
					<p><b>Profession</b><br>
					Grafiker</p>
					<p><b>Uddannelse</b><br>
					1968-71 Det Jyske Kunstakademi, Århus<br>
					1971-73 Kunstakademiet, Beograd, Jugoslavien<br>
					1974-75 Kunsthåndværkerskolen, Prag, Tjekkoslovakiet</p>
					<p><b>Udlandsophold- og rejser</b><br>
					1977 San Cataldo, Italien<br>
					1978 Atelier Nord, Oslo<br>
					1980-81 Atelier 17 Paris<br>
					1983-84 Pratt Graphics Center, New York<br>
					1996 Det Danske Institut for Videnskab og Kunst, Rom<br>
					2004 International Artists Colony, Visegrad, Republika Srpska<br>
					The Sicevo 2004 Art Colony, Nis, Serbien<br>
					2007 Kina studierejse<br>
					2008 Kina studierejse<br>
					2010 Jordan studierejse<br>
					2011 Jordan<br>
					2015 Studieophold på Det Danske Institut i Athen</p>
					<p><b>Legater</b><br>
					1976 Danmarks Nationalbanks Jubilæumsfond<br>
					1980 Knud Højgårds Fond<br>
					1983 Knud Højgårds Fond; Danmark-Amerika Fondet; Fulbright rejselegat 1983<br>
					1994 Norsk Kulturråds legat (s.m. Peter Esdaile)<br>
					1996 Dronning Ingrids Romerske Fond<br>
					1997 Århus Kommunes Kunstnerstipendium<br>
					1999 Århus Kommunes Kunstnerstipendium<br>
					2000 Statens Kunstfond, rejselegat; Det Danske Kulturinstitut<br>
					2001 Arbejdslegat Statens Kunstfond. Projektstøtte Statens Kunstfond (arkitekturudvalget s.m. arkitekterne Torben Nielsen, Susanne Jensen, Rasmus Grønbæk Hansen)<br>
					2002 Center for Dansk Billedkunst<br>
					2003 Århus Kommunes Kunstnerstipendium<br>
					2004 Århus Kommunes Kunstnerstipendium; Kunstrådet, Udvalget for billedkunst<br>
					2005 Kunstrådet, Udvalget for billedkunst; Kulturudviklingspuljen, Århus Kommune; Århus<br>Kommunes Kunstnerstipendium; Kunstrådets internationale billedkunstudvalg; Karl Mogensens Fond (Akademirådet)<br>
					2007 Kulturudviklingspuljen og Kunstnerstipendium, Århus Kommune; Kunstrådet, Udvalget for billedkunst<br>
					2008 Arbejdslegat Statens Kunstfond. Kunstrådet, Udvalget for billedkunst<br>
					2009 Konsul Georg Jorck og Hustru Emma Jorcks Fond; Konsul L.F. Foghts Fond;<br>Kulturudviklingspuljen, Århus Kommune<br>
					2010 Statens Kunstråd;Det internationale Billedkunstudvalg; Statens Kunstråd, billedkunstudvalget<br>
					2011 Statens Kunstfond rejselegat<br>
					2013 Konsul Georg Jorck og Hustru Emma Jorcks Fond; Konsul L.F. Foghts Fond; Anna E. Munchs Legat<br>
					2014 Akademieraadets Understøttelsesfond<br>
					2015 S. C. Van Fonden<br>
					2016 Statens Kunstfond<br>
					2016 Grosserer L.F. Foghts Fond</p>
				</div>


			</div> <!-- end of grid -->
		</div>

		<?php writeFooter(); ?>
	</div>
</body>
</html>