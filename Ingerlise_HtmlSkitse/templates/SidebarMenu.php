<?php

	// $leftMenu = array('Forside', 'Galleri', 'CV', 'Tekster', 'Kontakt', 'Links', 'Presse');

	$leftMenu = array(
		'Rå Rum',
		'Les Tour Fleuries',
		'Tageskarten',
		'Brilliant City',
		'Reqem Vandring i Ørkenen',
		'Reqem Vandring i Ørkenen II',
		'Višegrad',
		'Troms',
		'Udstillinger'
	);

	$subLeftMenu = array(
		'Hå ved Havet',
		'PRORA 1:1000',
		'Villes Nouvelles',
		'Folies',
		'Abraxas',
		'Efter Kampagnen',
		'Vor Dem Gesetz'
	);

	// this function outputs the header element, with menus and wrappers
	function writeSideMenu($activeTab) {

		global $leftMenu, $subLeftMenu; // NOW i can use this inside this function
		$menuLen = count($leftMenu);
		$subMenuLen = count($subLeftMenu);

		echo '<nav id="cssmenu">'; // cssmenu is used for jquery accordion menu
		// left sidebar menu here
		echo '<ul class="leftMenu">';
		for ($x = 0; $x < $menuLen; $x++) {
			if ($leftMenu[$x] == $activeTab) {
				echo '<li><a href="' . $leftMenu[$x] .'.php" class="active-trail"><span class="Arrow">></span>' . $leftMenu[$x] . '</a>';
				// print the subLeftMenu for the active tab
				echo '<ul>';
				for ($c = 0; $c < $subMenuLen; $c++) {
					echo '<li><a href="' . $leftMenu[$x] .'.php"><span class="Arrow">></span>' . $subLeftMenu[$c] . '</a>';
				}
				echo '</ul>';
			} else {
				echo '<li><a href="' . $leftMenu[$x] .'.php"><span class="Arrow">></span>' . $leftMenu[$x] . '</a>';
			}
		}
		echo '</ul>';
		echo '</nav>';
	}

?>