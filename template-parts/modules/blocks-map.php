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
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="26.667" viewBox="0 0 20 26.667"><defs><style>.a{fill:#d00224;}</style></defs><path class="a" d="M8.972,26.129C1.4,15.158,0,14.032,0,10a10,10,0,0,1,20,0c0,4.032-1.4,5.158-8.972,16.129a1.251,1.251,0,0,1-2.055,0ZM10,14.167A4.167,4.167,0,1,0,5.833,10,4.167,4.167,0,0,0,10,14.167Z"/></svg>
								<?php echo wp_kses_post( wpautop( $contact_address ) ); ?>
							</div>
						<?php endif; ?>
						<?php $contact_email = get_field( 'block_w_1_email' ); ?>
						<?php if ( $contact_email ) : ?>
							<div class="contact__email">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"><defs><style>.a{fill:#d00224;}</style></defs><path class="a" d="M21,6H5A2,2,0,0,0,3.01,8L3,20a2.006,2.006,0,0,0,2,2H21a2.006,2.006,0,0,0,2-2V8A2.006,2.006,0,0,0,21,6Zm0,14H5V10l8,5,8-5Zm-8-7L5,8H21Z" transform="translate(-3 -6)"/></svg>
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
