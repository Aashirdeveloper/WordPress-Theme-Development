<?php
// This is for index

get_header();
?>


<!-- including a template file  -->


<!-- <?php get_template_part('template-files/home', 'featured'); ?> -->

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpeg"
    style="width:100px; height:100px;">this is a way to add logo, img or dirctory in a theme -->


    <!-- here we apply he bootstrap container class for practice purpose as bootstrap is including in a functions.php -->
<div class="container">
    <?php
    if (have_posts()): // its a function it can fetch all the posts hirerechly
        while (have_posts()):
            the_post();

            // Display post content 
            ?>
            <h1> <?php the_title(); ?> </h1>
            <h3> <?php the_content(); ?> </h3>
            <?php
        endwhile;
    endif;
    ?>
</div>



<?php
get_sidebar();
get_footer();

?>