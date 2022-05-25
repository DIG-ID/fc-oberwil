<?php
/**
 * Template Name: Home Page Template
 * Template Post Type: page
 */

get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/content/home' );
	do_action( 'after_main_content' );
get_footer();
