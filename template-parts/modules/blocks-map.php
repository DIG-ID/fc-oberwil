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
						<?php $contact_phone = get_field( 'block_w_1_phone_number' ); ?>
						<?php if ( $contact_phone ) : ?>
							<div class="contact__email">
								<svg class="phone_svg" stroke="#D00224" stroke-width="0.7" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m25.5 29.2c-11.1-0.6-20.3-8.6-22.3-19.5-0.3-1.4-0.3-2.7-0.4-4.1 0-0.8 0.4-1.4 1.2-1.6 1.7-0.4 3.5-0.8 5.2-1.2 0.9-0.1 1.5 0.2 1.8 1 0.8 1.9 1.6 3.7 2.4 5.6 0.3 0.8 0.1 1.4-0.5 1.9-0.8 0.6-1.5 1.3-2.3 1.9-0.3 0.2-0.4 0.5-0.2 0.8 1.7 3.3 4.2 5.8 7.5 7.6 0.4 0.2 0.7 0.2 1-0.2 0.6-0.8 1.2-1.5 1.8-2.2 0.5-0.6 1.1-0.8 1.9-0.5 1.9 0.8 3.7 1.6 5.6 2.4 0.8 0.4 1.1 1.1 0.9 1.9-0.4 1.6-0.7 3.3-1.1 4.9-0.2 1-0.7 1.4-1.8 1.4-0.2-0.1-0.5-0.1-0.7-0.1zm-16.2-15.9c1-0.8 2-1.7 3-2.4 0.5-0.4 0.7-0.8 0.4-1.4-0.8-1.8-1.5-3.6-2.3-5.4-0.2-0.5-0.6-0.7-1.1-0.5-1.6 0.3-3.2 0.7-4.8 1.1-0.7 0.2-1 0.6-0.9 1.2 0.2 1.8 0.3 3.7 0.8 5.5 2.6 9.9 11.5 16.8 21.8 17 0.8 0 1-0.1 1.2-1 0.4-1.5 0.7-3.1 1.1-4.6 0.2-0.6 0-1-0.6-1.3-1.7-0.8-3.5-1.5-5.2-2.3-0.5-0.2-0.9-0.1-1.3 0.3-0.5 0.6-1 1.2-1.4 1.8-1.2 1.4-1.2 1.4-2.8 0.5-3.7-1.9-6.1-4.8-7.9-8.5z"/>
								</svg>
								<a href="tel:<?php echo esc_attr( $contact_phone ); ?>"><?php echo esc_html( $contact_phone ); ?></a>
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
