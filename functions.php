<?php

// Theme i use is called Brogrammer

// Include Classes
include ('includes/class_post_types.php');
include ('includes/class_theme.php');
include('includes/class_mapHelper.php');


/********************
**** Theme Class ****
********************/

// Theme supports
add_action( 'after_setup_theme', array( 'Theme', 'theme_supports' ) );

add_action( 'wp_enqueue_scripts', array( 'Theme', 'scripts' ) );

add_action( 'wp_enqueue_scripts', array( 'Theme', 'stylesheets' ) );

/*********************
** Post Types Class **
*********************/

// Register Custom Post Types
add_action ( 'init', array( 'Post_Types', 'register_my_post_types' ) );

// Register Menus
add_action( 'init', array( 'Theme', 'register_menus' ) );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function contact_widgets_init() {

	register_sidebar( array(
		'name'          => 'Contact Sidebar',
		'id'            => 'contact_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'contact_widgets_init' );

function home_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home Sidebar',
		'id'            => 'home_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'home_widgets_init' );



// add custom image sizes

add_image_size( 'project_image_featured', 260, 130, true );
add_image_size( 'project_image', 255, 220, true );
add_image_size( 'carousel_image', 1902, 504, true );
add_image_size( 'page_banner', 890, 316, true );
add_image_size( 'gallery_thumbnail', 100, 90, true );

/**
 * @uses WP_Query
 * @uses get_queried_object()
 * @see get_the_ID()
 * @return int
 * Retrieves the Post ID outside of the loop
 */

function get_the_post_id() {
	if ( in_the_loop() ) {
		$post_id = get_the_ID();
	} else {
		global $wp_query;
		$post_id = $wp_query->get_queried_object_id();
	}
	return $post_id;
}

?>