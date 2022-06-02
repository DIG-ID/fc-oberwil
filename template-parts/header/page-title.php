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
