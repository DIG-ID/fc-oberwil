<?php

// Adds customizer section.
$wp_customize->add_section(
	'footer_section',
	array(
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __( 'Footer', 'fc-oberwil' ),
		'description'    => __( 'Place to edit the footer content', 'fc-oberwil' ),
		'panel'          => 'fco_theme_panel',
	)
);

// Footer logo 01
$wp_customize->add_setting(
	'footer-logo-01',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'footer-logo-01',
		array(
			'label'     => __( 'Footer Logo Block 01', 'fc-oberwil' ),
			'section'   => 'footer_section',
			'mime_type' => 'image',
		)
	)
);

// Footer logo 02
$wp_customize->add_setting(
	'footer-logo-02',
	array(
		'default'           => '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'transport'         => 'refresh',
		'sanitize_callback' => 'fco_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Media_Control(
		$wp_customize,
		'footer-logo-02',
		array(
			'label'     => __( 'Footer Logo Block 02', 'fc-oberwil' ),
			'section'   => 'footer_section',
			'mime_type' => 'image',
		)
	)
);


$wp_customize->add_setting(
	'footer_contacts_address',
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
		'footer_contacts_address',
		array(
			'label'   => __( 'Contacts - Address', 'fc-oberwil' ),
			'type'    => 'textarea',
			'section' => 'footer_section',
		)
	)
);

$wp_customize->add_setting(
	'footer_contacts_tel',
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
		'footer_contacts_tel',
		array(
			'label'   => __( 'Contacts - Telephone', 'fc-oberwil' ),
			'type'    => 'tel',
			'section' => 'footer_section',
		)
	)
);


$wp_customize->add_setting(
	'footer_contacts_email',
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
		'footer_contacts_email',
		array(
			'label'   => __( 'Contacts - Email', 'fc-oberwil' ),
			'type'    => 'email',
			'section' => 'footer_section',
		)
	)
);