<?php

/**
 * Bogart Studio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bogart Studio
 */

require_once get_template_directory() . '/inc/customizer.php';


 function bogart_studio_scripts() {
    //  Bootstrap js and css files
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.1.3', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.1.3', 'all' );
      // Flexslider css and js
      wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all');
      wp_enqueue_script('flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
      wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array('jquery'), '', true);
      wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '', 'all');
  
    // Theme's main stylesheet
    wp_enqueue_style('bogart-studio-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    // Theme's main js
    wp_enqueue_script('bogart-studio-js', get_template_directory_uri() . '/inc/index.js', array(), '', true);

   
 }

 add_action( 'wp_enqueue_scripts', 'bogart_studio_scripts');

 add_filter( 'excerpt_length', function($length) {
  return 15;
}, PHP_INT_MAX );

function bogart_studio_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'bogart_studio_excerpt_more');

//  Settings for theme
function bogart_studio_config() {
    register_nav_menus(
        array(
            'bogart_studio_main_menu' => 'Bogart Studio Main Menu',
        )
        );

        add_theme_support( 'post-thumbnails' );
        add_theme_support('custom-logo');
        add_theme_support('title-tag');

        // add_image_size( 'bogart-studio-slider', 1920, 800, array('center', 'center'));
        add_image_size( 'bogart-studio-slider', 2000, 2000, array('left', 'top'));
        
}
add_action('after_setup_theme', 'bogart_studio_config', 0 );

/* ------------------------------------------------------------*/

// Custom post type for paintings
function custom_post_type_paintings() {
  // set UI labels for custom post type
  $labels = array(
    'name'                => _x( 'Paintings', 'Post Type General Name', 'bogartstudio' ),
    'singular_name'       => _x( 'Painting', 'Post Type Singular Name', 'bogartstudio' ),
    'menu_name'           => __( 'Paintings', 'bogartstudio' ),
    'parent_item_colon'   => __( 'Parent Painting', 'bogartstudio' ),
    'all_items'           => __( 'All Paintings', 'bogartstudio' ),
    'view_item'           => __( 'View Painting', 'bogartstudio' ),
    'add_new_item'        => __( 'Add New Painting', 'bogartstudio' ),
    'add_new'             => __( 'Add New', 'bogartstudio' ),
    'edit_item'           => __( 'Edit Painting', 'bogartstudio' ),
    'update_item'         => __( 'Update Painting', 'bogartstudio' ),
    'search_items'        => __( 'Search Painting', 'bogartstudio' ),
    'not_found'           => __( 'Not Found', 'bogartstudio' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'bogartstudio' ),
);
 
// Set other options for Custom Post Type
 
$args = array(
    'label'               => __( 'paintings', 'bogartstudio' ),
    'description'         => __( 'Painting news and reviews', 'bogartstudio' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */ 
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'             => 'dashicons-admin-customizer',

    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,

);
 
// Registering your Custom Post Type
register_post_type( 'paintings', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_paintings', 0 );

/* ------------------------------------------------------------*/
// Custom post type for events
function custom_post_type_events() {
  // set UI labels for custom post type
  $labels = array(
    'name'                => _x( 'Events', 'Post Type General Name', 'bogartstudio' ),
    'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'bogartstudio' ),
    'menu_name'           => __( 'Events', 'bogartstudio' ),
    'parent_item_colon'   => __( 'Parent Event', 'bogartstudio' ),
    'all_items'           => __( 'All Events', 'bogartstudio' ),
    'view_item'           => __( 'View Event', 'bogartstudio' ),
    'add_new_item'        => __( 'Add New Event', 'bogartstudio' ),
    'add_new'             => __( 'Add New', 'bogartstudio' ),
    'edit_item'           => __( 'Edit Event', 'bogartstudio' ),
    'update_item'         => __( 'Update Event', 'bogartstudio' ),
    'search_items'        => __( 'Search Event', 'bogartstudio' ),
    'not_found'           => __( 'Not Found', 'bogartstudio' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'bogartstudio' ),
);
 
// Set other options for Custom Post Type
 
$args = array(
    'label'               => __( 'events', 'bogartstudio' ),
    'description'         => __( 'Event news and reviews', 'bogartstudio' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'subject' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */ 
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 6,
    'menu_icon'             => 'dashicons-calendar-alt',

    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,

);
 
// Registering your Custom Post Type
register_post_type( 'events', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_events', 0 );

/* ------------------------------------------------------------*/

/* ------------------------------------------------------------*/
// Custom post type for photos
function custom_post_type_photos() {
  // set UI labels for custom post type
  $labels = array(
    'name'                => _x( 'Photos', 'Post Type General Name', 'bogartstudio' ),
    'singular_name'       => _x( 'Photo', 'Post Type Singular Name', 'bogartstudio' ),
    'menu_name'           => __( 'Photos', 'bogartstudio' ),
    'parent_item_colon'   => __( 'Parent Photo', 'bogartstudio' ),
    'all_items'           => __( 'All Photos', 'bogartstudio' ),
    'view_item'           => __( 'View Photo', 'bogartstudio' ),
    'add_new_item'        => __( 'Add New Photo', 'bogartstudio' ),
    'add_new'             => __( 'Add New', 'bogartstudio' ),
    'edit_item'           => __( 'Edit Photo', 'bogartstudio' ),
    'update_item'         => __( 'Update Photo', 'bogartstudio' ),
    'search_items'        => __( 'Search Photo', 'bogartstudio' ),
    'not_found'           => __( 'Not Found', 'bogartstudio' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'bogartstudio' ),
);
 
// Set other options for Custom Post Type
 
$args = array(
    'label'               => __( 'photos', 'bogartstudio' ),
    'description'         => __( 'Photos of paintings from owners', 'bogartstudio' ),
    'labels'              => $labels,
    // Features this CPT supports in Post Editor
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    // You can associate this CPT with a taxonomy or custom taxonomy. 
    'taxonomies'          => array( 'category' ),
    /* A hierarchical CPT is like Pages and can have
    * Parent and child items. A non-hierarchical CPT
    * is like Posts.
    */ 
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 7,
    'menu_icon'             => 'dashicons-camera-alt',

    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_in_rest' => true,

);
 
// Registering your Custom Post Type
register_post_type( 'photos', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type_photos', 0 );

/* ------------------------------------------------------------*/

