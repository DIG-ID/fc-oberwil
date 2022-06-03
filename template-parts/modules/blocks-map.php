<?php $block_w_01 = get_field( 'block_w_1' ); ?>
<?php $block_w_02 = get_field( 'block_w_2' ); ?>
<section id="blocks-section" class="blocks-section">
	<div class="container-fluid g-0">
		<div class="row g-0">
			<?php if ( $block_w_01 ) : ?>
				<div class="col-12 col-lg-6 block-image">
					<?php
					$location = get_field( 'block_w_1_google_map' );
					if ( $location ) :
						?>
						<div class="acf-map google-map" data-zoom="12">
							<div class="marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"></div>
						</div>
						<?php
					endif;
					?>
				</div>
				<div class="col-12 col-lg-6 block-content">
					<p class="section-subtitle"><?php the_field( 'block_w_1_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'block_w_1_title' ); ?></h2>
						<span></span>
					</div>
					<div class="contact">
						<?php $contact_address = get_field( 'block_w_1_address' ); ?>
						<?php if ( $contact_address ) : ?>
							<div class="contact__address">
								<i class="fco-icon-map-marker"></i>
								<?php echo wp_kses_post( wpautop( $contact_address ) ); ?>
							</div>
						<?php endif; ?>
						<?php $contact_email = get_field( 'block_w_1_email' ); ?>
						<?php if ( $contact_email ) : ?>
							<div class="contact__email">
								<i class="fco-icon-mail"></i>
								<a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="row g-0">
			<?php if ( $block_w_02 ) : ?>
				<div class="col-12 col-lg-6 order-1 order-lg-0 block-content">
					<p class="section-subtitle"><?php the_field( 'block_w_2_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'block_w_2_title' ); ?></h2>
						<span></span>
					</div>
					<p class="description"><?php the_field( 'block_w_2_description' ); ?></p>
					<?php $btn_url_2 = get_field( 'block_w_2_button_link' ); ?>
				</div>
				<div class="col-12 col-lg-6 order-0 order-lg-1 block-image">
					<?php
					$block_image_02 = get_field( 'block_w_2_image' );
					if ( $block_image_02 ) :
						echo wp_get_attachment_image( $block_image_02, 'full' );
					endif;
					?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
