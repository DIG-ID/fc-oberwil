<section class="sponsoren-wrapper">
	<?php
	if ( have_rows( 'sponsoren' ) ) :
		while ( have_rows( 'sponsoren' ) ) :
			the_row();
			echo '<div class="sponsor"><div class="container"><div class="row aling-items-center">';
			$sponsor_cat = get_sub_field( 'sponsor_categorie' );
			$sponsors    = get_sub_field( 'sponsors' );
			echo '<div class="col-12"><h3 class="sponsor__name">' . $sponsor_cat . '</h3><hr></div>';
			if ( $sponsors ) :
				foreach ( $sponsors as $sponsor ) :
					$sponsors_logo = get_sub_field( 'image' );
					//$sponsors_url  = get_sub_field( 'link' );
					echo '<div class="col-6 col-lg-3 sponsor__logo"><a href="' . esc_url( $sponsor['link'] ) . '" target="_blank">' . wp_get_attachment_image( $sponsor['image'], 'sponsoren-logo-thumb' ) . '</a></div>';
				endforeach;
			endif;
			echo '</div></div></div>';
		endwhile;
	endif;
	?>
</section>
