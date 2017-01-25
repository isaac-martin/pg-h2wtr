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
		wp_enqueue_script( 'sm', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'gsapanim', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'smoothstate', get_template_directory_uri() . '/js/smoothstate.js', array('jquery'), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array('smoothstate'), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'triggers', get_template_directory_uri() . '/js/triggers.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

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
