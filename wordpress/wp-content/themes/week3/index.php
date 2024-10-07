Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum repellendus reiciendis aspernatur neque tempore! Odit, nam? Accusamus porro aliquam, exercitationem corporis perferendis itaque, similique veniam culpa repellat quasi fugit doloremque.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation'
    ));
    get_header();
    ?>
    <?php
    //  add_action('parse_comment_query', 'my_test', 11);
    //  function my_test(){
    //  echo "This text is hook to This is a parse_comment_query hook";

    //  }



    // function wporg_filter_title( $title ) {
    //     return 'The ' . $title . ' was filtered';
    //     }
    //     add_filter( 'the_title', 'wporg_filter_title' )
    
    // function my_custom_post_type_navigation() {
    //     $args = array(
    //         'labels' => array(
    //             'name' => __('Navigations'),
    //             'singular_name' => __('Navigation')
    //         ),
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'navigation'),
    //         'supports' => array('title', 'editor', 'thumbnail'),
    //     );
    
    //     register_post_type('navigation', $args);
    //     do_action('registered_post_type_wp_navigation');
    // }
    // add_action('init', 'my_custom_post_type_navigation');


    function wporg_filter_title( $title ) {
        return 'The ' . $title . ' was filtered';
        }
        add_filter( 'the_title', 'wporg_filter_title' );
    ?>
     <?php 
    get_footer();
    wp_nav_menu(array(
        'theme_location' => 'footerMenuLocation'
    ));
    ?>
</body>
</html>