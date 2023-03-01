<?php
function_enqueue_parent_style(){
    ('parent_style', get_tempelate_directory_uri(). '/style.css')
    ('style_style', get_stylesheet_directory_uri(). '/style.css')
    ('inner_style', get_stylesheet_directory_uri(). '/inner.css')
    ('inner_script', get_stylesheet_directory_uri(). '/index.js')





}

add_action('wp_enqueue_script', 'enqueue_parent_styles')

?>