<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package carrefour-viajes-agencias
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function carrefour_viajes_agencias_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'carrefour_viajes_agencias_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function carrefour_viajes_agencias_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'carrefour_viajes_agencias_pingback_header' );

function my_acf_google_map_api( $api ){
        $api['key'] = 'AIzaSyBVJgl6Z6o6yffjc4b-nDfTSOSSFcvGYNE'; /* my key is here */
        //$api['key'] = 'AIzaSyDj6WGGG2wI6FoPFhD1R72F11XwyVD-mLg'; /* my key is here */
        return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');