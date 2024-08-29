<?php


// This is for index

get_header();
    ?>


<?php
    if ( have_posts() ) : // its a function it can fetch all the posts hirerechly
        while ( have_posts() ) : the_post();
        
             // Display post content 

           the_title();
           the_content();
            
            
        endwhile;
  endif;
?>



<?php
        get_sidebar();

        get_footer();
?>



