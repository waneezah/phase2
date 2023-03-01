<?php
function_enqueue_parent_style(){
    ('parent_style', get_tempelate_directory_uri(). '/style.css')
}

add_action('wp_enqueue_script', 'enqueue_parent_styles')

?>