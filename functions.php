<?php 

function portfolio_features(){
    
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('main-site-styles', get_stylesheet_uri());
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script( 'js-file', get_template_directory_uri() . '/js/main.js', NULL, '1.0', true);

}


add_action('wp_enqueue_scripts', 'portfolio_features');

