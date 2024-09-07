<?php

// This is the functions.php file

// support functions
function wplearning_theme_setup(){
    
    // it can add a custom logo functionality/support in the theme, customize > site identity
    add_theme_support('custom-logo');

    // it can add the webpage title
    add_theme_support('title-tag');
    
    // it can add/register a option of featured image in the post edit area
    add_theme_support('post-thumbnails');

    // this can add a image size in WordPress as home-feaured and we can call it where you can want
    add_image_size('home-featured', 680, 400, array('center','center'));
    
    // it can add/register a option of featured image in the post edit area
    add_theme_support('automatic-feed-links');

    // this function can register a menu in the WordPress dashboard
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wplearning' ),
        'secondary' => __( 'Secondary Menu', 'wplearning' ),
        'footer' => __( 'Footer Menu', 'wplearning' ),
    ) );
}
add_action('after_setup_theme', 'wplearning_theme_setup');




// styles and scripts can be called using wp_head() in the header .php
function wplearning_theme_scripts() {
    
    // bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');

    // for css
    wp_enqueue_style('style', get_stylesheet_uri());

    // for including jQuery
    wp_enqueue_script('jquery');

    // for bootstrap javascript
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js');

    // for js
     wp_enqueue_script('my-slider', get_template_directory_uri() . '/assets/js/main.js');


}

add_action('wp_enqueue_scripts', 'wplearning_theme_scripts');






// it can add a side bar/widget area, appearence > then you see a widget menu
function wplearning_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'primary', 'theme_name' ),
		'id'            => 'main-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    // for footer widgets
	register_sidebar( array(
		'name'          => __( 'footer-1', 'theme_name' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'footer-2', 'theme_name' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
    register_sidebar( array(
		'name'          => __( 'footer-3', 'theme_name' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	
}
add_action( 'widgets_init', 'wplearning_widgets_init' );






// it can add the asynchronous to JS scripts for better loading
function add_async_attribute($tag, $handle)
{
    // Add script handles to the array below
    $scripts_to_async = array('my-slider');

    foreach ($scripts_to_async as $async_script) {
        if ($async_script === $handle) {
            return str_replace(' src', ' async="async" src', $tag);
        }
    }

    return $tag;
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);









