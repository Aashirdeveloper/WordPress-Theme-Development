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
    <!-- this script is for testing the jquery -->
    <script>

        jQuery(document).ready(function ($) {

            $("h1").fadeOut();

        });
    </script>