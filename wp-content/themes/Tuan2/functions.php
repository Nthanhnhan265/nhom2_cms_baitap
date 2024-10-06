<?php 

function load_my_style(){
    wp_enqueue_style('my_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','load_my_style');


function get_featured_image_url($post_id) {
    if (has_post_thumbnail($post_id)) {
        // Trả về URL của hình ảnh đại diện
        $image_url = get_the_post_thumbnail_url($post_id, 'full');
        return $image_url;
    } else {
        // Trả về URL ảnh mặc định nếu không có hình ảnh đại diện
        return get_template_directory_uri() . '/images/default-image.jpg';
    }
}
function enqueue_custom_js() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/build/index.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');

function university_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerExploreMenu', 'Footer Explore Menu');
    register_nav_menu('footerLearnMenu', 'Footer Learn Menu');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');


function wp_custom_body_class( $classes ) {
    if (is_user_logged_in()) {
        $classes[] = 'user-logged-in';
    }
    if (is_front_page()) {
        $classes[] = 'home-page';
    } elseif (is_single()) {
        $classes[] = 'single-post-view';
        $categories = get_the_category();
        if (!empty($categories)) {
            $classes[] = 'category-' . $categories[0]->slug;
        }
    }
    return $classes;
}
add_filter( 'body_class', 'wp_custom_body_class' );