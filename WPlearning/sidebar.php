<?php
/*

In WordPress, the sidebar.php file is used to define the layout and content of the sidebar area on your site. It is a template file in your WordPress theme that controls how the sidebar is displayed across different pages.

*/

?>

<!-- it can call a side bar on front-end -->
<div class="sidebar">
<?php dynamic_sidebar( 'main-sidebar' ); ?>
</div>