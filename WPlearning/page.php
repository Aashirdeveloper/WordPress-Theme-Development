<?php
/*

It show the pages.

*/

get_header();
?>

<?php
    if ( have_posts() ) : // its a function it can fetch all the posts hirerechly
        while ( have_posts() ) : the_post();
        ?>
            <!-- // Display post content -->

            <h1> <?php  the_title(); ?> </h1>
            <h2> <?php  the_content(); ?> </h2>
            <?php
        endwhile;
  endif;
?>










<?php
get_footer();

?>