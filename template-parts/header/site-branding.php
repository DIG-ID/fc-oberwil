<?php
/**
 * Displays the site header branding.
 */
?>

<?php if ( is_front_page() ) : ?>
	<div class="navbar-brand navbar-brand-wrapper">
		<h1 class="screen-reader-text"><?php bloginfo( 'name' ); ?></h1>
		<?php the_custom_logo(); ?>
	</div>
<?php else : ?>
	<div class="navbar-brand">
		<p class="screen-reader-text"><?php bloginfo( 'name' ); ?></p>
		<?php the_custom_logo(); ?>
	</div>
<?php endif; ?>
