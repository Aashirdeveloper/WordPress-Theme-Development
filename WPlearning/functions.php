<?php
// This is the functions.php file

// it can add a custom logo functionality/support in the theme, customize > site identity
add_theme_support('custom-logo');


// this function can register a menu in the WordPress dashboard
register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'wplearning' ),
    'secondary' => __( 'Secondary Menu', 'wplearning' ),
    'footer' => __( 'Footer Menu', 'wplearning' ),
) );

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


?>






