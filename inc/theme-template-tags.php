<?php
/**
 * This function open the main content.
 */

function fco_theme_before_main_content() {
	?>
	<main id="main-content" class="main-content">
	<?php
}

add_action( 'before_main_content', 'fco_theme_before_main_content' );

/**
 * This function closes the main content.
 */
function fco_theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'fco_theme_after_main_content' );


/**
 * Get our socials from the theme customizer and display them.
 */
function fco_socials() {
	echo '<div class="socials-wrapper">';
	$facebook_url  = get_theme_mod( 'facebook_url' );
	$linkedin_url  = get_theme_mod( 'linkedin_url' );
	$twitter_url   = get_theme_mod( 'twitter_url' );
	$youtube_url   = get_theme_mod( 'youtube_url' );
	$instagram_url = get_theme_mod( 'instagram_url' );
	if ( ! empty( $facebook_url ) ) :
		echo '<a href="' , esc_url( $facebook_url ) , '" target="_blank" class="social-link social-link__facebook"><i class="fco-icon-facebook"></i></a>';
	endif;
	if ( ! empty( $instagram_url ) ) :
		echo '<a href="' , esc_url( $instagram_url ) , '" target="_blank" class="social-link social-link__instagram"><i class="fco-icon-instagram"></i></a>';
	endif;
	if ( ! empty( $linkedin_url ) ) :
		echo '<a href="' , esc_url( $linkedin_url ) , '" target="_blank" class="social-link social-link__linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></a>';
	endif;
	if ( ! empty( $youtube_url ) ) :
		echo '<a href="' , esc_url( $youtube_url ) , '" target="_blank" class="social-link social-link__youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a>';
	endif;
	if ( ! empty( $twitter_url ) ) :
		echo '<a href="' , esc_url( $twitter_url ) , '" target="_blank" class="social-link social-link__twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>';
	endif;
	echo '</div>';
}

add_action( 'socials', 'fco_socials' );

if ( ! function_exists( 'fco_pagination' ) ) {

	function fco_pagination() {
		global $wp_query;
		$bignum = 999999999;
		if ( $wp_query->max_num_pages <= 1 ) {
			return;
		}
		echo '<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">';
		echo '<hr>';
		echo '<nav class="page-pagination">';
		echo paginate_links(
			array(
				'base'      => str_replace( $bignum, '%#%', esc_url( get_pagenum_link( $bignum ) ) ),
				'format'    => '',
				'current'   => max( 1, get_query_var( 'paged' ) ),
				'total'     => $wp_query->max_num_pages,
				'prev_text' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
				'next_text' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
				'type'      => 'list',
				'end_size'  => 1,
				'mid_size'  => 1,
			)
		);
		echo '</nav>';
		echo '</div>';
	}
}