<?php 

function load_my_style(){
    wp_enqueue_style('my_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','load_my_style');

function wp_custom_body_class( $classes ) {
    if ( is_single() ) {
        $classes[] = 'single-post-view';
    }
    return $classes;
}
add_filter( 'body_class', 'wp_custom_body_class' );