<?php 

function portfolio_features(){
    wp_enqueue_script( 'main-site-js', get_theme_file_uri('/js/main.js ', NULL, '1.0', true )); 
    wp_enqueue_style('main-site-styles', get_stylesheet_uri());

    
}


add_action('wp_enqueue_scripts', 'portfolio_features');

