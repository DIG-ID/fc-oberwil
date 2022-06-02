<section class="teams-section">
	<?php
	$args = array( 'post_type' => 'teams' );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			get_template_part( 'template-parts/content/team' );
		endwhile;
		wp_reset_postdata();
	endif;
	?>
</section>
