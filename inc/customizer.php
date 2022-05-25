<?php
/**
 * Register theme customizer
 */

function fco_customizer_register( $wp_customize ) {

	$wp_customize->add_panel(
		'fco_theme_panel',
		array(
			'priority'       => 20,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __( 'FC Oberwil Options', 'fc-oberwil' ),
			'description'    => __( 'Options for the FC Oberwill Theme', 'fc-oberwil' ),
		)
	);

	require get_parent_theme_file_path( '/inc/customizer/socials.php' );

}

add_action( 'customize_register', 'fco_customizer_register' );
