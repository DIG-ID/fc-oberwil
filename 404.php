<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/content/none' );
	do_action( 'after_main_content' );
get_footer();
