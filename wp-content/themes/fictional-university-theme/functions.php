<?php 

function load_my_style(){
    wp_enqueue_style('my_style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','load_my_style');