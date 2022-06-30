<?php
/**
 * Displays the welcome section on the home page.
 */
?>
<section id="about-section" class="about-section">
	<div class="container">
		<div class="row align-items-center about-wrapper">
			<div class="col-12 col-lg-6 d-none d-lg-block">
				<?php
				$image = get_field( 'about_section_image' );
				if ( $image ) :
					echo wp_get_attachment_image( $image, 'full' );
				endif;
				?>
			</div>
			<div class="col-12 col-lg-6">
				<p class="section-subtitle"><?php the_field( 'about_section_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php the_field( 'about_section_title' ); ?></h2>
					<span></span>
				</div>
				<p class="about-section-description"><?php the_field( 'about_section_description' ); ?></p>
			</div>
		</div>
		<div class="row d-none">
			<div class="col-12">
				<p class="section-subtitle"><?php the_field( 'about_section_sponsors_group_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php the_field( 'about_section_sponsors_group_title' ); ?></h2>
					<span></span>
				</div>
			</div>
		</div>
		<?php
		$featured_sponsors = get_field( 'about_section_sponsors_group_sponsors' );
		if ( $featured_sponsors ) :
			?>
			<div class="row d-none sponsors-wrapper">
				<?php foreach ( $featured_sponsors as $sponsor ) :
					?>
					<div class="col-6 col-sm-6 col-md-6 col-lg-3">
						<?php echo get_the_post_thumbnail( $sponsor->ID,'full' ); ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
