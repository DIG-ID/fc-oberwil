<?php
/**
 * The home template file.
 */

get_header();

if ( have_posts() ) :
	// Load posts loop.
	while ( have_posts() ) :
		the_post();
		echo 'Hello World!';
	endwhile;
else :
	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content', 'none' );
endif;

get_footer();
