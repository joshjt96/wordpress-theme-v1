<?php

function tca_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tca_theme_support');

function tca_menus(){
    $locations = array(
        'primary' => "Desktop Navbar",
        'footer' => "Footer Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'tca_menus');

function jt_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('tca-stylesheet', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('tca-google-font-api', "https://fonts.googleapis.com", array(), '1.0', 'all');
    wp_enqueue_style('tca-gstatic', "https://fonts.gstatic.com", array(), '1.0', 'all');
    wp_enqueue_style('tca-google-font', "https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&family=Sorts+Mill+Goudy:ital@0;1&display=swap", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'jt_register_styles');

function jt_register_scripts(){
    wp_enqueue_script('tca-js', get_template_directory_uri()."/assets/js/tom.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'jt_register_scripts');

function tca_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}

add_action('widgets_init', 'tca_widget_areas');

?>