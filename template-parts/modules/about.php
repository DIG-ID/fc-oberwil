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
		<div class="row">
			<div class="col-12">
				<p class="section-subtitle"><?php the_field( 'about_section_sponsors_group_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title"><?php the_field( 'about_section_sponsors_group_title' ); ?></h2>
					<span></span>
				</div>
			</div>
		</div>
		<div class="row sponsors-wrapper aling-items-center">
			<div class="swiper sponsor-swiper">
				<div class="swiper-wrapper">
					<?php
					if ( have_rows( 'about_section_sponsors' ) ) :
						while ( have_rows( 'about_section_sponsors' ) ) :
							the_row();
							$sponsors_image = get_sub_field( 'image' );
							$sponsors_link  = get_sub_field( 'link' );
							?>
							<div class="col-6 col-lg-3 sponsor__logo swiper-slide">
								<a href="<?php esc_url( $sponsors_link ); ?>" target="_blank">
									<?php echo wp_get_attachment_image( $sponsors_image, 'sponsoren-logo-thumb' ); ?>
								</a>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
