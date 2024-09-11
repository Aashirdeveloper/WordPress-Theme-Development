<!-- 10-09-2024/Tuesday -->

<?php
/*

It show the page template for Home Page.

Template Name: Home

*/
get_header();
?>

<div class="custom-header">

    <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
    <img src="<?php echo $img_url; ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">

</div>



<div class="flex-row ml-0 mr-0 mt-0 text-center">
    <?php
    if (have_posts()): // its a function it can fetch all the posts hirerechly
        while (have_posts()):
            the_post();
            ?>
            <!-- // Display post content -->

            <!-- <h1> <?php the_title(); ?> </h1> -->
            <?php the_content(); ?>
            <?php
        endwhile;
    endif;
    ?>
</div>


<!-- 11-09-2024/Wednesday -->
<div class="home-posts row ml-0 mr-0 mt-5 ">
    <div class="col">
        <div class="section-head">
            <h3>Latest from Technology</h3>
        </div>
        <div class="section-content">

            <?php

            $args = array(
                'cat' => 7
            );
            $tech_posts = new WP_Query($args);

            if ($tech_posts->have_posts()): // its a function it can fetch all the posts hirerechly
                while ($tech_posts->have_posts()):
                    $tech_posts->the_post();
                    ?>

                    <div class="home-post-row ml-0 mr-0 row-flex mb-3">
                        <div class="post-thumb col-4 pl-0">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')) ?>

                        </div>
                        <div class="post-title col-8">
                        <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title() ?></a></h3>

                        <p><?php  the_excerpt(); ?></p>
                        </div>
                       

                    </div>

                    <!-- // Display post content -->
                  
                    <?php
                endwhile;
            endif;
            ?>
            <?php wp_reset_postdata(); ?>



        </div>
    </div>



    <div class="col">
        <div class="section-head">
            <h3>Latest from Social Media</h3>
        </div>
        <div class="section-content"></div>
    </div>

</div>










<?php
get_footer();

?>