<?php

/** 
* Class for all Post_Type functions
**/

class Post_Types {

	/**
	* Register Post Types 
	**/

	public static function register_my_post_types() {

		// Projects Post Type
		register_post_type( 'projects',
            array(
                'labels' => array(
                    'name' => __( 'Projects' ),
                    'singular' => __( 'Project' ),
                    'add_new_item' => __( 'Add New Project' ),
                    'edit_item' => __( 'Edit Project' )
                    ),
                'public' => true,
                'has_archive' => false,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-aside',
                'supports' => array( 'title', 'thumbnail', 'author', 'revisions', 'editor')
                )
            );

		// Clients
		register_post_type( 'clients',
            array(
                'labels' => array(
                    'name' => __( 'Clients' ),
                    'singular' => __( 'Client' ),
                    'add_new_item' => __( 'Add New Client' ),
                    'edit_item' => __( 'Edit Client' )
                    ),
                'public' => true,
                'has_archive' => false,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-format-chat',
                'supports' => array( 'title', 'thumbnail', 'author', 'revisions', 'editor')
                )
            );

        // SlideShow Image Post type for Home Page Carousel
        register_post_type( 'slideshow_images',
            array(
                'labels' => array(
                    'name' => __( 'Slideshow Images' ),
                    'singular' => __( 'Slideshow Image' ),
                    'add_new_item' => __( 'Add New Image' ),
                    'edit_item' => __( 'Edit Image' )
                    ),
                'public' => true,
                'has_archive' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-images-alt2',
                'supports' => array( 'title', 'thumbnail', 'author', 'revisions', 'editor')
                )
            );

                // SlideShow Image Post type for Home Page Carousel
        register_post_type( 'testimonials',
            array(
                'labels' => array(
                    'name' => __( 'Testimonials' ),
                    'singular' => __( 'Testimonial' ),
                    'add_new_item' => __( 'Add New Testimonial' ),
                    'edit_item' => __( 'Edit Testimonial' )
                    ),
                'public' => true,
                'has_archive' => true,
                'menu_position' => 20,
                'menu_icon' => 'dashicons-groups',
                'supports' => array( 'title','editor')
                )
            );

	}
}







?>