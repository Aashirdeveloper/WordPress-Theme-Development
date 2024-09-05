<?php
/*

This is basically a part of template file, it is called multiple times in a website.

*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo get_the_title(); ?> |
        <?php bloginfo('name') ?>
    </title>
    <!-- this is how we include a style sheet but this is not recomended according to WordPress -->
    <!-- <link rel="stylesheet" href="<?php echo get_theme_file_uri() ?>/style.css"> -->
    <!-- it can load all the scripts or styles -->
    <?php wp_head() ?>
</head>

<body>

    <div class="site-main container">
        <header class="site-header">
            <div class="site-branding">

                <!-- it can link the logo with home-page url, buth there is no need of href because logo is by default linked, so we removed it -->
                <!-- <a href="<?php bloginfo('url') ?>">
                </a> -->

                    <!-- it can call the logo -->
                    <?php the_custom_logo() ?>
            </div>
        </header>

        <!-- it can call te menu on the front-end -->
        <nav class="site-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary'
            ) ); 
            
            ?>
        </nav>

        <!-- this script is for testing the jquery -->
        <!-- <script>

        jQuery(document).ready(function ($) {

            $("h1").fadeOut();

        });
    </script>  -->