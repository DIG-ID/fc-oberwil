<?php
/**
 * Template Name: Clubhaus Page Template
 * Template Post Type: page
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/header/page-title' );
		get_template_part( 'template-parts/content/page-intro' );
		get_template_part( 'template-parts/modules/blocks-color' );
		get_template_part( 'template-parts/modules/blocks-map' );
		//get_template_part( 'template-parts/modules/instawall' );
	do_action( 'after_main_content' );
get_footer();
