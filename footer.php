<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */


$img_block_01    = get_theme_mod( 'footer-logo-01' );
$img_block_02    = get_theme_mod( 'footer-logo-02' );
$contact_address = get_theme_mod( 'footer_contacts_address' );
$contact_email   = get_theme_mod( 'footer_contacts_email' );
?>

		<footer class="main-footer">
			<div class="container">
				<div class="row widgets-wrapper">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="widget-wrapper">
							<h3 class="widget-title">Sponsor</h3>
							<div class="widget-content">
								<?php
								if ( $img_block_01 ) :
									echo wp_get_attachment_image( $img_block_01, 'full' );
								endif;
								?>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="widget-wrapper">
							<h3 class="widget-title">Verband</h3>
							<div class="widget-content">
								<?php
								if ( $img_block_02 ) :
									echo wp_get_attachment_image( $img_block_02, 'full' );
								endif;
								?>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="widget-wrapper">
							<h3 class="widget-title">Follow us</h3>
							<div class="widget-content">
								<?php do_action( 'socials' ); ?>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<div class="widget-wrapper">
							<h3 class="widget-title">Kontakt</h3>
							<div class="widget-content widget-contact">
								<?php if ( $contact_address ) : ?>
									<div class="widget-contact--address">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="26.667" viewBox="0 0 20 26.667"><defs><style>.a{fill:#d00224;}</style></defs><path class="a" d="M8.972,26.129C1.4,15.158,0,14.032,0,10a10,10,0,0,1,20,0c0,4.032-1.4,5.158-8.972,16.129a1.251,1.251,0,0,1-2.055,0ZM10,14.167A4.167,4.167,0,1,0,5.833,10,4.167,4.167,0,0,0,10,14.167Z"/></svg>
										<?php echo wp_kses_post( wpautop( $contact_address ) ); ?>
									</div>
								<?php endif; ?>
								<?php if ( $contact_email ) : ?>
									<div class="widget-contact--email">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16"><defs><style>.a{fill:#d00224;}</style></defs><path class="a" d="M21,6H5A2,2,0,0,0,3.01,8L3,20a2.006,2.006,0,0,0,2,2H21a2.006,2.006,0,0,0,2-2V8A2.006,2.006,0,0,0,21,6Zm0,14H5V10l8,5,8-5Zm-8-7L5,8H21Z" transform="translate(-3 -6)"/></svg>
										<a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row justify-content-between align-itens-center flex-column flex-md-row copyright-widgets-wrapper">
					<div class="col-12 col-sm-12 col-md-6 col-lg-6">
						<?php
						wp_nav_menu(
							array(
								'menu'            => '',
								'menu_class'      => '',
								'menu_id'         => 'copyright_footer',
								'fallback_cb'     => false,
								'walker'          => '',
								'theme_location'  => 'footer',
							)
						);
						?>
					</div>
					<div class="col-12 col-sm-12 col-md-6 col-lg-2 text-center text-lg-end">
						<p class="devby d-inline-block">Developed by: <a href="https://dig.id">dig.id</a></p>
					</div>
				</div>
			</div>
		</footer>
		<a id="button-btt">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
				<path d="M416 352c-8.188 0-16.38-3.125-22.62-9.375L224 173.3l-169.4 169.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25C432.4 348.9 424.2 352 416 352z"/>
			</svg>
		</a>
		<?php wp_footer(); ?>

	</body>
</html>
