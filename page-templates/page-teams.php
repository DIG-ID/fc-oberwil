<?php
/**
 * Template Name: Teams Page Template
 * Template Post Type: page
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/header/page-title' );
		get_template_part( 'template-parts/content/page-intro' );
		get_template_part( 'template-parts/content/teams' );
		//et_template_part( 'template-parts/modules/instawall' );
	do_action( 'after_main_content' );
get_footer();
