<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';


function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Teams', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Teams', 'twentytwentyone' ),

            'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyone' ),
            'all_items'           => __( 'All Teams', 'twentytwentyone' ),
            'view_item'           => __( 'View Movie', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Movie', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Movie', 'twentytwentyone' ),
            'update_item'         => __( 'Update Movie', 'twentytwentyone' ),
            'search_items'        => __( 'Search Movie', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'teams', 'twentytwentyone' ),
            'description'         => __( 'teams news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'menu_icon' => 'dashicons-admin-users',
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'teams', $args );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );

    function departament_taxonomy() 
    {

        $args = array(
            'labels' => array(
                'name' => 'Departaments',
                'singular_name' => 'departament',
            ),
            
            'public' => true,
            'hierarchical' => false,
        );
        register_taxonomy('departaments');     
    }

    add_action('init', 'departament_taxonomy');
    

new Theme();
