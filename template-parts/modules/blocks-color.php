<?php $block_c_01 = get_field( 'block_color_1' ); ?>
<?php $block_c_02 = get_field( 'block_color_2' ); ?>
<section id="blocks-color-section" class="blocks-color-section">
	<div class="container-fluid g-0">
		<div class="row g-0">
			<?php if ( $block_c_01 ) : ?>
				<div class="col-12 col-lg-6 block-image" >
					<?php
					$block_c_image_01 = get_field( 'block_color_1_image' );
					if ( $block_c_image_01 ) :
						echo wp_get_attachment_image( $block_c_image_01, 'block-image' );
					endif;
					?>
					<!--<div class="background-image" style="width:100%;height:100%;min-height:540px;background-color:#FFFFFF;background:url(<?php //echo esc_url ( wp_get_attachment_image_url( get_field( 'block_color_1_image' ), 'block-image' ) ); ?>);background-position:center;background-repeat:no-repeat;background-size:cover;"></div>-->
				</div>
				<div class="col-12 col-lg-6 block-content">
					<p class="section-subtitle"><?php the_field( 'block_color_1_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'block_color_1_title' ); ?></h2>
						<span></span>
					</div>
					<p class="description"><?php the_field( 'block_color_1_description' ); ?></p>
					<?php $btn_url_1 = get_field( 'block_color_1_button_link' ); ?>
					<?php if ( $btn_url_1 ) : ?>
						<a href="<?php echo esc_url( $btn_url_1 ); ?>" class="block-btn"><?php the_field( 'block_color_1_button_text' ); ?> <i class="fco-icon-chevron-right"></i></a>
					<?php endif; ?>
					<?php $form_sc = get_field( 'block_color_1_form_shortcode' ); ?>
					<?php if ( $form_sc ) : ?>
						<a data-fancybox href="#form-modal" class="block-btn"><?php the_field( 'block_color_1_button_text' ); ?> <i class="fco-icon-chevron-right"></i></a>
						<div style="display: none;" id="form-modal">
							<?php echo do_shortcode( $form_sc ); ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class="row g-0">
			<?php if ( $block_c_02 ) : ?>
				<div class="col-12 col-lg-6 order-1 order-lg-0 block-content">
					<p class="section-subtitle"><?php the_field( 'block_color_2_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'block_color_2_title' ); ?></h2>
						<span></span>
					</div>
					<p class="description"><?php the_field( 'block_color_2_description' ); ?></p>
					<?php $btn_url_2 = get_field( 'block_color_2_button_link' ); ?>
					<a href="<?php echo esc_url( $btn_url_2 ); ?>" class="block-btn"><?php the_field( 'block_color_2_button_text' ); ?> <i class="fco-icon-chevron-right"></i></a>
				</div>
				<div class="col-12 col-lg-6 order-0 order-lg-1 block-image">
					<?php
					$block_c_image_02 = get_field( 'block_color_2_image' );
					if ( $block_c_image_02 ) :
						echo wp_get_attachment_image( $block_c_image_02, 'full' );
					endif;
					?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
