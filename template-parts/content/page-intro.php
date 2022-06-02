<?php $page_intro = get_field( 'page_intro' ); ?>
<?php if ( ! empty( $page_intro ) ) : ?>
	<section class="page-intro">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="section-subtitle"><?php the_field( 'page_intro_subtitle' ); ?></p>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php the_field( 'page_intro_title' ); ?></h2>
						<span></span>
					</div>
					<p class="description"><?php the_field( 'page_intro_description' ); ?></p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
