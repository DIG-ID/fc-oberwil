<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

function fco_setup() {

	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

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

	add_image_size( 'hero-banner', 1920, 1080, array( 'center', 'center' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Main menu', 'fc-oberwil' ),
			'footer'  => __( 'Footer menu', 'fc-oberwil' ),
		)
	);

}

add_action( 'after_setup_theme', 'fco_setup' );

/**
 * Enqueue scripts and styles.
 *
 * @since 1.0.0
 *
 * @return void
 */
function fco_styles_and_scripts() {

	// Register Theme main style.
	wp_register_style( 'fco-theme-style', get_template_directory_uri() . '/dist/main.css', array(), wp_get_theme()->get( 'Version' ) );

	// Add styles inline.
	wp_add_inline_style( 'fco-theme-style', fco_get_font_face_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'fco-theme-style' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script(
		'fcoberwil-scripts',
		get_template_directory_uri() . '/dist/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script( 'fcoberwil-scripts' );

	//wp_enqueue_script( 'fcoberwil-cookie-bar', get_theme_file_uri( '/assets/js/custom/cookieBar.js' ), array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

	// Print styles.
	//wp_enqueue_style( 'aamob-uk-print-style', get_template_directory_uri() . '/build/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}

add_action( 'wp_enqueue_scripts', 'fco_styles_and_scripts' );


if ( ! function_exists( 'fco_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function fco_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Poppins';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-Regular.ttf' ) . "') format('ttf');
		}

		@font-face{
			font-family: 'Poppins';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Poppins-SemiBold.ttf' ) . "') format('ttf');
		}
		
		@font-face{
			font-family: 'Roboto';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Roboto-Regular.ttf' ) . "') format('ttf');
		}

		@font-face{
			font-family: 'Roboto';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/Roboto-Bold.ttf' ) . "') format('ttf');
		}
		";

	}

endif;

if ( ! function_exists( 'fco_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function fco_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Poppins-Regular.ttf' ) ); ?>" as="font" type="font/ttf" crossorigin>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/Roboto-Regular.ttf' ) ); ?>" as="font" type="font/ttf" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'fco_preload_webfonts' );

// Register custom theme sidebar.
function fco_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer Widgets', 'fc-oberwil' ),
			'description'   => __( 'Widgets that appears on the footer of the website.', 'fc-oberwil' ),
			'before_widget' => '<div id="%1$s" class="col-sm-12 col-md-3 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'fco_register_sidebars' );


// Theme optimization.
require get_template_directory() . '/inc/theme-optimizations.php';

// Theme custom template tags.
require get_template_directory() . '/inc/theme-template-tags.php';

// Theme custom custom functions.
//require get_template_directory() . '/inc/theme-custom-functions.php';

// Theme custom custom customizer.
require get_template_directory() . '/inc/customizer.php';

// Theme custom nav Walker.
require get_template_directory() . '/inc/theme-custom-walker.php';


// Theme admin settings.
//require get_template_directory() . '/inc/admin-settings.php';
