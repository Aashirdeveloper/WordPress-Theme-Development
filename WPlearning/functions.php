<?php
// This is the functions.php file

function wplearning_theme_scripts() {

    // for css
    wp_enqueue_style('style', get_stylesheet_uri());

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






