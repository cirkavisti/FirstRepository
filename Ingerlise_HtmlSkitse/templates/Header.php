<?php

	$Menu = array('Forside', 'Galleri', 'CV', 'Tekster', 'Kontakt', 'Links', 'Presse');
	$langMenu = array('Da', 'Eng');

	// get the length of the menu arrays
	$menuLangLen = count($langMenu);

	// this function outputs the header element, with menus and wrappers
	function writeHeader($activeTab) {

		global $Menu; // NOW i can use this inside this function
		$menuLen = count($Menu);

		echo '<header>';
		echo '<nav>';
		// right language menu here
		echo '<ul class="langMenu">';
		echo '<li><a href="#">Da</a>';
		echo '<li><a href="#">Eng</a>';
		echo '</ul>';
		// main menu here
		echo '<ul class="menu">';
		for ($x = 0; $x < $menuLen; $x++) {
			if ($Menu[$x] == $activeTab) {
				echo '<li><a href="#" class="active-trail">' . $Menu[$x] . '</a>';
			} else {
				echo '<li><a href="#">' . $Menu[$x] . '</a>';
			}
		}
		echo '</ul>';
		echo '</nav>';
		echo '</header>';
	}

	function writeMsg($MessageString) {
	    echo '<p><i>Hello world! ' . $MessageString . '</i></p>';
	}

?>