<nav class="navbar navbar-expand-lg navbar-dark" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'fc-oberwil' ); ?>">
	<div class="container">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
			<div class="offcanvas-header justify-content-end">
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body justify-content-lg-end">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'navbar-nav align-items-lg-center',
						'fallback_cb'     => '',
						'menu_id'         => 'main-nav',
						'walker'          => new fco_wp_nav_menu_walker(),
					)
				);
				?>
				<?php do_action( 'socials' ); ?>
			</div>
		</div>
	</div>
</nav>
