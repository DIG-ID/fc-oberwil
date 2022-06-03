<?php $block_w_01 = get_field( 'block_w_1' ); ?>
<?php $block_w_02 = get_field( 'block_w_2' ); ?>
<section id="blocks-section" class="blocks-section">
	<div class="container-fluid g-0">
		<div class="row g-0">
			<?php if ( $block_w_01 ) : ?>
				<div class="col-12 col-lg-6 block-image">
					<?php
					$block_image_01 = get_field( 'block_w_1_image' );
					if ( $block_image_01 ) :
						echo wp_get_attachment_image( $block_image_01, 'block-image' );
					endif;
					?>
				</div>
				<div class="col-12 col-lg-6 block-content">
					<p class="section-subtitle"><?php the_field( 'block_w_1_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'block_w_1_title' ); ?></h2>
						<span></span>
					</div>
					<p class="description"><?php the_field( 'block_w_1_description' ); ?></p>
					<?php $btn_url_1 = get_field( 'block_w_1_button_link' ); ?>
					<a href="<?php echo esc_url( $btn_url_1 ); ?>" class="block-btn"><?php the_field( 'block_w_1_button_text' ); ?> <i class="fco-icon-chevron-right"></i></a>
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
					<a href="<?php echo esc_url( $btn_url_2 ); ?>" class="block-btn"><?php the_field( 'block_w_2_button_text' ); ?> <i class="fco-icon-chevron-right"></i></a>
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
