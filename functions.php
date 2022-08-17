<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';

function custom_post_type() {
  
		$labels = [
			'name'              => _x( 'Teams', 'Post Type General Name' ),
			'singular_name'     => _x( 'teams', 'Post Type Singular Name' ),
			'menu_name'         => __( 'Team Member' ),
			'parent_item'       => null,
			'parent_item_colon' => null,
		];
		   
		$args = [
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-admin-users',
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
		];
		  
		register_post_type( 'teams', $args );
	  
}
	  
	add_action( 'init', 'custom_post_type' );

function departament_taxonomy() {

	$args = [
		'labels'            => [
			'name'          => 'Departaments',
			'singular_name' => 'departament',
			   
		],
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'has_archive'       => true,
		'query_var'         => true,
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => [ 'slug' => 'teams' ],
	];
	register_taxonomy( 'departaments', [ 'teams' ], $args );     
}

	add_action( 'init', 'departament_taxonomy' );


if ( ! function_exists( 'prefix_custom_excerpt_length' ) ) {
	function prefix_custom_excerpt_length( $length ) {
		return 30;
	}
}

add_filter( 'excerpt_length', 'prefix_custom_excerpt_length' );

if ( ! function_exists( 'prefix_custom_the_title' ) ) {
	function bold_title( $title ) {
		return '<strong>' . $title . '</strong>';
	}
}

add_filter( 'the_title', 'bold_title' );

function add_text_after_single_blog( $content ) {
	if ( ! is_home() &&    
	is_singular( 'post' ) ) {
			$content .= '<h2>If u like this artcile, check the other</h2>';
	} elseif ( ! is_home() &&    
	is_single() ) {
		$content .= '<h2>Check others members of team</h2>';
	}
	return $content;
}
add_filter( 'the_content', 'add_text_after_single_blog' );

	register_nav_menu( 'top-navigation', __( 'Header menu', 'nuplo' ) );
	register_nav_menu( 'footer', __( 'Footer menu', 'nuplo' ) );

new Theme();
