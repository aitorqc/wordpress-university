<?php

function university_files(){
    wp_enqueue_script('main-university-js', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

function university_features(){
    register_nav_menu('headerMenuLocation', 'Main Header Menu');
    register_nav_menu('footerExploreMenu', 'Explore Footer Menu');
    register_nav_menu('footerLearnMenu', 'Learn Footer Menu');
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'university_files');
add_action('after_setup_theme', 'university_features');

?>