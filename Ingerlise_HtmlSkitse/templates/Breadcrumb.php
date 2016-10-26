<?php

	$bcMenu = array('Galleri', 'Hå ved havet', 'Breadcrumb');

	// this function outputs the header element, with menus and wrappers
	function Breadcrumbs($activeTab) {

		global $bcMenu; // NOW i can use this inside this function
		$menuLen = count($bcMenu);

		echo '<nav>';
		// left sidebar menu here
		echo '<ul class="Breadcrumbs">';
		for ($x = 0; $x < $menuLen; $x++) {
			echo '<li><a href="#">' . $bcMenu[$x] . '</a>';
			if ($x < ($menuLen -1)) {
				echo '&nbsp;&nbsp;>&nbsp;&nbsp;';
			}
		}
		echo '</ul>';
		echo '</nav>';
	}

?>