<?php

	$leftMenu = array('Forside', 'Galleri', 'CV', 'Tekster', 'Kontakt', 'Links', 'Presse');
	$subLeftMenu = array(
		'Hå ved havet',
		'PRORA 1:1000',
		'Villes Nouvelles',
		'Folies',
		'Abraxas',
		'Efter Kampagenen',
		'Vor Dem Gesetz'
	);

	// this function outputs the header element, with menus and wrappers
	function writeSideMenu($activeTab) {

		global $leftMenu, $subLeftMenu; // NOW i can use this inside this function
		$menuLen = count($leftMenu);
		$subMenuLen = count($subLeftMenu);

		echo '<nav>';
		// left sidebar menu here
		echo '<ul class="leftMenu">';
		for ($x = 0; $x < $menuLen; $x++) {
			if ($leftMenu[$x] == $activeTab) {
				echo '<li><a href="#" class="active-trail">' . $leftMenu[$x] . '</a>';
				// print the subLeftMenu for the active tab
				echo '<ul>';
				for ($c = 0; $c < $subMenuLen; $c++) {
					echo '<li><a href="#">' . $subLeftMenu[$c] . '</a>';
				}
				echo '</ul>';
			} else {
				echo '<li><a href="#">' . $leftMenu[$x] . '</a>';
			}
		}
		echo '</ul>';
		echo '</nav>';
	}

?>