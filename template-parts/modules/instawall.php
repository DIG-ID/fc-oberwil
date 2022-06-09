<section id="instawall-section" class="instawall-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="section-subtitle">Follow us on<?php the_field( 'block_1_subtitle' ); ?></p>
				<div class="section-title-wrapper">
					<h2 class="section-title">Instagram<?php the_field( 'block_1_title' ); ?></h2>
					<span></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode( get_theme_mod( 'instalwall_shortcode' ) ); ?>
			</div>
		</div>
	</div>
</section>
