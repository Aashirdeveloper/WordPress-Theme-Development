<?php
// This is for index

get_header();
?>


<!-- including a template file  -->


<!-- <?php get_template_part('template-files/home', 'featured'); ?>  -->

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpeg"
    style="width:100px; height:100px;">this is a way to add logo, img or dirctory in a theme -->


<!-- here we apply he bootstrap container class for practice purpose as bootstrap is including in a functions.php -->
<div class="home-main">
    <div class="row mr-0 ml-0">
        <div class="home-posts col-lg-8 col-xs-12">
            <?php
            if (have_posts()): // its a function it can fetch all the posts hirerechly
                while (have_posts()):
                    the_post();

                    // Display post content 
                    ?>

                    <!-- <h1> <?php the_title(); ?> </h1>
                    <h3> <?php the_content(); ?> </h3> -->


                    <!-- modified -->
                    <article class="home-post">
                        <div class="post-header">
                            <div class="post-thumbnail row ml-0 mr-0">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('home-featured') ?></a>
                                <!--this home-featured is a image size defined in the functions.php -->
                            </div>
                            <a href="<?php the_permalink() ?>">
                                <h1><?php the_title() ?></h1>
                            </a>
                        </div>

                        <div class="post-description">
                            <?php the_excerpt(); ?>
                        </div>

                        <div class="post-footer row ml-0 mr-0">
                            <div class="post-meta">
                                <strong>Author: </strong> <?php the_author(); ?>
                            </div>
                            <div class="post-meta">
                                <strong>Posted time: </strong> <?php the_time(); ?>
                            </div>
                        </div>


                    </article>

                    <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="home-sidebar col-lg-4 co-xs-12>">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>