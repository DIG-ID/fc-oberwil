<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function fcoberwil_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Twenty Twenty-One, use a find and replace
		* to change 'twentytwentyone' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fco', get_template_directory() . '/languages' );

	/*
		* Let WordPress manage the document title.
		* This theme does not use a hard-coded <title> tag in the document head,
		* WordPress will provide it for us.
		*/
	add_theme_support( 'title-tag' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	/**
	 * Add post-formats support.
	 */
	add_theme_support(
		'post-formats',
		array(
			'gallery',
			'video',
		)
	);

		/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 9999 );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Main menu', 'fco' ),
			'mobile'  => esc_html__( 'Mobile menu', 'fco' ),
			'footer'  => __( 'Footer menu', 'fco' ),
		)
	);

}

add_action( 'after_setup_theme', 'fcoberwil_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function fcoberwil_styles_and_scripts() {

	// Theme main style.
	wp_enqueue_style( 'fcoberwil-main-style', get_template_directory_uri() . '/build/main.css', array(), wp_get_theme()->get( 'Version' ) );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script(
		'fcoberwil-scripts',
		get_template_directory_uri() . '/build/app.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 'fcoberwil-scripts' );

	//wp_enqueue_script( 'fcoberwil-cookie-bar', get_theme_file_uri( '/assets/js/custom/cookieBar.js' ), array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

	// Print styles.
	//wp_enqueue_style( 'aamob-uk-print-style', get_template_directory_uri() . '/build/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}

add_action( 'wp_enqueue_scripts', 'fcoberwil_styles_and_scripts' );

// Register ustom theme sidebar.
function fcoberwil_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer Widgets' ),
			'description'   => __( 'Widgets that appears on the footer of the website.' ),
			'before_widget' => '<div id="%1$s" class="col-sm-12 col-md-3 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'fcoberwil_register_sidebars' );


// Theme optimization.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
//require get_template_directory() . '/inc/theme-template-tags.php';

// Theme custom custom functions.
//require get_template_directory() . '/inc/theme-custom-functions.php';

// Theme custom custom customizer.
require get_template_directory() . '/inc/customizer.php';


// Theme admin settings.
//require get_template_directory() . '/inc/admin-settings.php';
