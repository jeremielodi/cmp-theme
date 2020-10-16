

<?php

	get_header();  

	if(!is_front_page()) {
		include get_template_directory().'/inc/content-page.php';
	} else {
		include get_template_directory().'/inc/home-page.php';
	}

	get_footer();
?>