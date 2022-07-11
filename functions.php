<?php

function jt_register_styles(){
    wp_enqueue_style('tca-stylesheet', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'jt_register_styles');

?>