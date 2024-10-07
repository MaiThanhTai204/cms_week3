<?php
function load_my_style(){
    wp_enqueue_style('my_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','load_my_style');

function load_my_nav(){
    register_nav_menu("headerMenuLocation", 'Header Menu Location');
    register_nav_menu('footerMenuLocation','Footer Menu Location');
}
add_action('after_setup_theme','load_my_nav');
function university_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','university_features');

// wp_enqueue_script()
?>