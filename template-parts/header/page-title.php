<?php if ( has_post_thumbnail() ) : ?>
	<?php $image = get_the_post_thumbnail_url( get_the_ID(), 'page-header' ); ?>
	<?php var_dump( $image ); ?>
	<section class="page-header page-header--bg-image" style="background-color:#1B1F27;background:linear-gradient(0deg, rgba(27, 31, 39, 1) 0%, rgba(27, 31, 39, 1) 5%, rgba(27, 31, 39, 0.9) 20%, rgba(27, 31, 39, 0.7) 40%, rgba(27, 31, 39, 0.5) 60%, rgba(27, 31, 39, 0.1) 100%),url(<?php echo esc_url( $image ); ?>);background-position: center;background-repeat: no-repeat;background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
				</div>
				<div class="col-12">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
<?php else : ?>
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
				</div>
				<div class="col-12">
					<?php
					if ( function_exists( 'yoast_breadcrumb' ) ) :
						yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

