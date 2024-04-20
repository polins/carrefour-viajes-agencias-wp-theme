<?php
/**
 * carrefour-viajes-agencias functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package carrefour-viajes-agencias
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function carrefour_viajes_agencias_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on carrefour-viajes-agencias, use a find and replace
		* to change 'carrefour-viajes-agencias' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'carrefour-viajes-agencias', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'carrefour-viajes-agencias' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'carrefour_viajes_agencias_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'carrefour_viajes_agencias_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function carrefour_viajes_agencias_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'carrefour_viajes_agencias_content_width', 640 );
}
add_action( 'after_setup_theme', 'carrefour_viajes_agencias_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function carrefour_viajes_agencias_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'carrefour-viajes-agencias' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'carrefour-viajes-agencias' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'carrefour_viajes_agencias_widgets_init' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Post Types.
 */
require get_template_directory() . '/inc/cpt.php';

/**
 * Styles and JS.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Gallery
 */
require get_template_directory() . '/inc/gallery.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * 
 * 
function agencias_function() {
    // do shortcode actions here
    // https://www.viajes-carrefour.com/agencias-viajes/wp-admin/admin.php?page=company-import
    $output = "";

	  $temp = $wp_query; 
	  $wp_query = null; 
	  $wp_query = new WP_Query(); 
	  $wp_query->query('showposts=999&post_type=company'); 

  	while ($wp_query->have_posts()) : $wp_query->the_post(); 

  		$output .= get_the_post_thumbnail_url(get_the_ID(), 'full');
  		$output .=";";
  		$output .= get_the_title();
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_address_name')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs1')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs2')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs3')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs4')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs5')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs6')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_openhrs7')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_doc_phone')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_company_soc_email')[0];
  		$output .=";";
  		$output .= get_post_meta(get_the_ID(),'metro_address_region_name')[0];
  		$output .=";";
  		$output .= "<br/>";

  	 endwhile;

  	   $wp_query = null; 
  $wp_query = $temp;  // Reset

  	 return $output;

}
add_shortcode( 'agencias', 'agencias_function' );

*/