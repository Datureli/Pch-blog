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

new Theme();
