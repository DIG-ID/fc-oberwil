<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/header/page-title' );
		get_template_part( 'template-parts/content/page' );
	do_action( 'after_main_content' );
get_footer();
