<?php
/**
 * Displays the site main navigation.
 */
?>

<nav clas="navbar navbar-expand-lg" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'fc-oberwil' ); ?>">
	<div class="container-fluid">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'collapse, navbar-collapse',
				'container_id'    => 'navbarSupportedContent',
				'items_wrap'      => '<ul class="%2$s navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</div>
</nav>
