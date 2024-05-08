<?php 


/**
 * Enqueue scripts and styles.
 */
function carrefour_enqueue() {
	//wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
	wp_enqueue_style( 'carrefour-style', get_template_directory_uri() . '/dist/css/style.css' );
	
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/dist/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVJgl6Z6o6yffjc4b-nDfTSOSSFcvGYNE', array(), _S_VERSION, true );
	wp_enqueue_script( 'carrefour-main', get_template_directory_uri() . '/dist/js/main.js', array(), _S_VERSION, true );

	if(is_singular('agencia')){
		wp_enqueue_script( 'cycle', get_template_directory_uri() . '/dist/js/jquery.cycle2.min.js', array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'carrefour_enqueue' );
