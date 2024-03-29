<?php

// Register Custom Post Type
function agencia_post_type() {

	$labels = array(
		'name'                  => _x( 'Agencias', 'Post Type General Name', 'carrefour-viajes-agencias' ),
		'singular_name'         => _x( 'Agencia', 'Post Type Singular Name', 'carrefour-viajes-agencias' ),
		'menu_name'             => __( 'Agencias', 'carrefour-viajes-agencias' ),
		'name_admin_bar'        => __( 'Agencia', 'carrefour-viajes-agencias' ),
		'archives'              => __( 'Agencia Archives', 'carrefour-viajes-agencias' ),
		'attributes'            => __( 'Agencia Attributes', 'carrefour-viajes-agencias' ),
		'parent_item_colon'     => __( 'Parent Agencia:', 'carrefour-viajes-agencias' ),
		'all_items'             => __( 'All Agencias', 'carrefour-viajes-agencias' ),
		'add_new_item'          => __( 'Add New Agencia', 'carrefour-viajes-agencias' ),
		'add_new'               => __( 'Add New', 'carrefour-viajes-agencias' ),
		'new_item'              => __( 'Agencia Item', 'carrefour-viajes-agencias' ),
		'edit_item'             => __( 'Edit Agencia', 'carrefour-viajes-agencias' ),
		'update_item'           => __( 'Update ItemAgencia', 'carrefour-viajes-agencias' ),
		'view_item'             => __( 'View Agencia', 'carrefour-viajes-agencias' ),
		'view_items'            => __( 'View Agencias', 'carrefour-viajes-agencias' ),
		'search_items'          => __( 'Search Agencia', 'carrefour-viajes-agencias' ),
		'not_found'             => __( 'Not found', 'carrefour-viajes-agencias' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'carrefour-viajes-agencias' ),
		'featured_image'        => __( 'Featured Image', 'carrefour-viajes-agencias' ),
		'set_featured_image'    => __( 'Set featured image', 'carrefour-viajes-agencias' ),
		'remove_featured_image' => __( 'Remove featured image', 'carrefour-viajes-agencias' ),
		'use_featured_image'    => __( 'Use as featured image', 'carrefour-viajes-agencias' ),
		'insert_into_item'      => __( 'Insert into item', 'carrefour-viajes-agencias' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'carrefour-viajes-agencias' ),
		'items_list'            => __( 'Items list', 'carrefour-viajes-agencias' ),
		'items_list_navigation' => __( 'Items list navigation', 'carrefour-viajes-agencias' ),
		'filter_items_list'     => __( 'Filter items list', 'carrefour-viajes-agencias' ),
	);
	$rewrite = array(
		'slug'                  => '/',
		'with_front'            => false,
	);
	$args = array(
		'label'                 => __( 'Agencia', 'carrefour-viajes-agencias' ),
		'description'           => __( 'Agencias de Viajes Carrefour', 'carrefour-viajes-agencias' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'              => array( 'localidad'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-site',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'agencia', $args );

}
add_action( 'init', 'agencia_post_type', 0 );

// Register Custom Taxonomy
function localidad_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Localidades', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Localidad', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Localidad', 'text_domain' ),
		'all_items'                  => __( 'All Localidades', 'text_domain' ),
		'parent_item'                => __( 'Parent Localidad', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Localidad:', 'text_domain' ),
		'new_item_name'              => __( 'New Localidad Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Localidad', 'text_domain' ),
		'edit_item'                  => __( 'Edit Localidad', 'text_domain' ),
		'update_item'                => __( 'Update Localidad', 'text_domain' ),
		'view_item'                  => __( 'View Localidad', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Localidades', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'localidad',
		'with_front'                 => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'localidad', array( 'agencia' ), $args );

}
add_action( 'init', 'localidad_custom_taxonomy', 0 );



// Register Custom Taxonomy
function zip_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Códigos postales', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Código postal', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Código postal', 'text_domain' ),
		'all_items'                  => __( 'All Códigos postales', 'text_domain' ),
		'parent_item'                => __( 'Parent Código postal', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Código postal:', 'text_domain' ),
		'new_item_name'              => __( 'New Código postal Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Código postal', 'text_domain' ),
		'edit_item'                  => __( 'Edit Código postal', 'text_domain' ),
		'update_item'                => __( 'Update Código postal', 'text_domain' ),
		'view_item'                  => __( 'View Código postal', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Códigos postales', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'Código postal',
		'with_front'                 => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'zip', array( 'agencia' ), $args );

}
add_action( 'init', 'zip_custom_taxonomy', 0 );

function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'agencia' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );

function na_parse_request( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'agencia', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );