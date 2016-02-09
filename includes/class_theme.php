<?php

/**
* Class for all Theme functions
**/

class Theme {

/**
* Add the post format support
**/
	public static function theme_supports() {
		add_theme_support( 'post-thumbnails' );
	}

/**
* Add the post format support
*/
    public static function register_menus() {
        register_nav_menus( array(
            'main-menu'     =>  'Main menu',
            'footer-menu' => 'Footer menu'
            )
          );
    }

    public static function stylesheets() {
    
        wp_register_style('bootstrap.css' , get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );
        wp_enqueue_style('bootstrap.css');
        wp_register_style('normalize.css' , get_template_directory_uri() . '/css/normalize.css', array(), '1', 'all' );
        wp_enqueue_style('normalize.css');
        wp_enqueue_Style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all');
    }

    public static function scripts() {
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script('rotate-js', get_template_directory_uri() . '/js/rotate.js', array('jquery'));

    }
    



}









?>
