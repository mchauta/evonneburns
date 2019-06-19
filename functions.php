<?php

function create_reviews() {
  register_post_type( 'reviews',
    array(
      'labels' => array(
        'name' => __( 'Reviews' ),
        'singular_name' => __( 'Review' ),
        'edit_item' => __( 'Edit Review' ),
        'new_item' => __( 'New Review' )
      ),
      'public' => false,
      'has_archive' => true,
      'rewrite' => array('slug' => 'reviews'),
      'menu_icon'   => 'dashicons-star-empty',
			'show_in_nav_menus' => true,
      'supports' => array('title', 'editor','thumbnail', 'revisions', 'page-attributes'),
    	'show_ui' => true,
    )
  );
}
add_action( 'init', 'create_reviews' );

function create_services() {
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' ),
        'edit_item' => __( 'Edit Service' ),
        'new_item' => __( 'New Service' )
      ),
      'public' => false,
      'has_archive' => false,
      'supports' => array('title', 'editor','thumbnail', 'revisions', 'page-attributes'),
      'menu_icon'   => 'dashicons-tickets-alt',
			'show_in_nav_menus' => true,
    	'show_ui' => true,
    )
  );
}
add_action( 'init', 'create_services' );
