<?php 


function portfolio_files(){
    
    // current stylesheets external and within my theme folder
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    // wp_enqueue_style('main-site-styles', get_stylesheet_uri());
    //Current scripts for the page
    // wp_enqueue_script( 'js-file', get_template_directory_uri() . './dist/main.js', NULL, '1.0', true);
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js/', NULL, '1.0', true);
    wp_enqueue_script('scrollReveal', '//unpkg.com/scrollreveal', NULL, '1.0', false);
  
    wp_enqueue_script( 'js-file', 'http://localhost:3000/bundled.js', NULL, '1.0', true);


    /**If comments are enabled by the user, and we are on a post page, 
    then the comment reply script will be loaded. Otherwise, it will not. */
    if ( is_singular() &&  comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    

}

add_action('wp_enqueue_scripts', 'portfolio_files');


function porfolio_features(){
    // generate dynamic title tag depending on the screen you are in
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'porfolio_features');

