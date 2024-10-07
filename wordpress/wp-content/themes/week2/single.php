<?php
wp_nav_menu(array(
    'theme_location' => 'headerMenuLocation'
));
get_header();
echo 'This is a simple page';
while(have_posts()){
    the_post(); ?>
    <h2> <?php the_title();?> </h2>
    <?php the_content(); ?>
    <hr>
    <?php } 
    get_footer();
    wp_nav_menu(array(
        'theme_location' => 'footerMenuLocation'
    ));
    ?>
    
<!-- ?> -->