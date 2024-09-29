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

function University_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','University_features');