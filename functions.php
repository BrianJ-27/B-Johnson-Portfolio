<?php 

function portfolio_files(){
    
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('main-site-styles', get_stylesheet_uri());
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', NULL, '1.0', true);
    wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/main.js', NULL, '1.0', true);

}


add_action('wp_enqueue_scripts', 'portfolio_files');


function porfolio_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'porfolio_features');

