<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/header/page-title' );
		get_template_part( 'template-parts/content/page-intro' );
		get_template_part( 'template-parts/content/single' );
		get_template_part( 'template-parts/modules/instawall' );
	do_action( 'after_main_content' );
get_footer();
