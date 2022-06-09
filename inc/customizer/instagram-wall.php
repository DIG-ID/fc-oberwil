<?php

// Adds customizer section.
$wp_customize->add_section(
	'instawall_section',
	array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Instagram Wall', 'fc-oberwil' ),
		'description'    => __( 'Place to edit the shortcode for the instagram wall', 'fc-oberwil' ),
		'panel'          => 'fco_theme_panel',
	)
);

$wp_customize->add_setting(
	'instalwall_shortcode',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);
$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'instalwall_shortcode',
		array(
			'label'   => __( 'Instagram Wall Shortcode', 'fc-oberwil' ),
			'type'    => 'text',
			'section' => 'instawall_section',
		)
	)
);
