<?php

	// $Menu = array('Forside', 'Galleri', 'CV', 'Tekster', 'Kontakt', 'Links', 'Presse');
	$Menu = array('Forside', 'Galleri', 'CV', 'Tekster', 'Kontakt');
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
		echo '<li><a href="#" class="active-trail">Da</a>';
		echo '<li><a href="#">Eng</a>';
		echo '</ul>';
		// main menu here
		echo '<ul class="menu">';
		echo '<li><a href="index.php">' . $Menu[0] . '</a>'; // the first line here is index.php
		for ($x = 1; $x < $menuLen; $x++) {
			if ($Menu[$x] == $activeTab) {
				echo '<li><a href="' . $Menu[$x] .'.php" class="active-trail">' . $Menu[$x] . '</a>';
			} else {
				echo '<li><a href="' . $Menu[$x] .'.php">' . $Menu[$x] . '</a>';
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