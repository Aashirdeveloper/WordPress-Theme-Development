
<!-- 10-09-2024/Tuesday -->

<?php
/*

It show the page template for About Page.

Template Name: About

*/
get_header();
?>

<div class="custom-header">

    <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <img src="<?php echo $img_url; ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">

</div>
<h1>I am template!</h1>

<?php
if (have_posts()): // its a function it can fetch all the posts hirerechly
    while (have_posts()):
        the_post();
        ?>
        <!-- // Display post content -->

        <h1> <?php the_title(); ?> </h1>
        <h3> <?php the_content(); ?> </h3>
        <?php
    endwhile;
endif;
?>










<?php
get_footer();

?>