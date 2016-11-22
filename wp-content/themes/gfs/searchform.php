<?php
echo '<form role="search" method="get" class="search-form" action="' . esc_url ( home_url ( 'recherche' ) ) . '">
		<input type="text" class="search-field" placeholder="Recherche dans gofoseduction.com" id="sujet" name="sujet" title="Recherche dans goforseduction.com">
		<input type="submit" class="search-submit" value="' . esc_attr ( 'Search', 'submit_button' ) . '">
	  </form>';