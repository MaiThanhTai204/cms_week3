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

// action hook
// Đăng ký Custom Post Type "navigation"
// Đăng ký Custom Post Type "navigation"
function my_custom_post_type_navigation() {
    $args = array(
        'labels' => array(
            'name' => __('Navigations'),
            'singular_name' => __('Navigation')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'navigation'),
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    // Đăng ký loại bài viết tùy chỉnh
    register_post_type('navigation', $args);

    // Kích hoạt hook tùy chỉnh sau khi đăng ký post type
    do_action('registered_post_type_wp_navigation');
}
add_action('init', 'my_custom_post_type_navigation');

// Hook vào registered_post_type_wp_navigation để thực thi hành động
function my_custom_navigation_action() {
    // Thực thi code tùy chỉnh
    error_log('Post type "navigation" đã được đăng ký thành công.');
}
add_action('registered_post_type_wp_navigation', 'my_custom_navigation_action');



// filter hook

function my_custom_stylesheet_option($stylesheet) {
    // Điều kiện thay đổi theme tùy chỉnh, ví dụ theo user role
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        if (in_array('administrator', (array) $user->roles)) {
            // Trả về một theme khác nếu người dùng là admin
            return 'your-admin-theme';
        }
    }
    
    // Giữ nguyên theme hiện tại nếu không thay đổi gì
    return $stylesheet;
}
add_filter('option_stylesheet', 'my_custom_stylesheet_option');
// wp_enqueue_script()



