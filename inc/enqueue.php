<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'mh', '//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'ajaxchimp', '//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array(), $the_theme->get( 'Version' ), true );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );



function homescripts() {
    if ( is_page_template( 'page-home.php' )  ) {
			$the_theme = wp_get_theme();
			wp_enqueue_script( 'cookie', '//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.3/js.cookie.min.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'sm', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'gsapanim', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'sm-home', get_template_directory_uri() . '/js/home-sm.js', array(), $the_theme->get( 'Version' ), true );
    }
}
add_action('wp_enqueue_scripts', 'homescripts');


function storyscripts() {
    if ( is_page_template( 'page-our-story.php' )  ) {
			$the_theme = wp_get_theme();
			wp_enqueue_script( 'sm', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', array(), $the_theme->get( 'Version' ), true );
			wp_enqueue_script( 'gsapanim', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), $the_theme->get( 'Version' ), true );
    	wp_enqueue_script( 'sm-story', get_template_directory_uri() . '/js/story-sm.js', array(), $the_theme->get( 'Version' ), true );
    }
}
add_action('wp_enqueue_scripts', 'storyscripts');


/**
 *Loading slider script conditionally
 */

if ( is_active_sidebar( 'hero' ) ) :
	add_action( 'wp_enqueue_scripts', 'understrap_slider' );

	if ( ! function_exists( 'understrap_slider' ) ) {
		/**
		 * Setup slider.
		 */
		function understrap_slider() {
			if ( is_front_page() ) {
				$data = array(
					'timeout' => intval( get_theme_mod( 'understrap_theme_slider_time_setting', 5000 ) ),
					'items'   => intval( get_theme_mod( 'understrap_theme_slider_count_setting', 1 ) ),
				);

				wp_enqueue_script( 'understrap-slider-script',
				get_stylesheet_directory_uri() . '/js/slider_settings.js', array() );
				wp_localize_script( 'understrap-slider-script', 'understrap_slider_variables', $data );
			}
		}
	}
endif;
