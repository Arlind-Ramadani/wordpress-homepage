<?php

/**
* kapioto functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package kapioto
*/

if ( ! function_exists( 'kapioto_setup' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

    function kapioto_setup() {

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

    	register_nav_menus( array(
    		'primary' => esc_html__( 'Primary', 'kapioto' ),
    		'footer' => esc_html__( 'Footer', 'kapioto' )
    	));
    }

endif;

add_action( 'after_setup_theme', 'kapioto_setup' );

/**
* Enqueue scripts and styles.
*/

function kapioto_scripts() {
	wp_enqueue_style( 'kapioto-style', get_stylesheet_uri() );
    wp_enqueue_style( 'kapioto-main-style', get_template_directory_uri() . '/dist/css/style.css', array(), null );
    
	wp_enqueue_script( 'kapioto-main-js', get_template_directory_uri() . '/dist/js/main.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'kapioto_scripts' );

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widgets',
  )
);