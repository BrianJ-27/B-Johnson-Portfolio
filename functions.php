<?php

function pageBanner()
{
?>
    <div class="img__banner--container">
        <!--Banner Image Mark-up Starts Here-->
        <div class="img__header--container" style="background-image: url('<?php
            if (!is_single()) {
            the_field('page_banner_background_image', 32);
            } else {
            the_field('page_banner_background_image');
            }
            ?>');">

            <!--Banner Title Mark-up Starts Here-->
            <div class="header__title--container">
                <h1 class="header__title"><?php single_post_title(); ?></h1>
                <h3 class="sub__title"><?php
                    if (!is_single()) {
                    the_field('page_banner_subtitle', 32);
                    } else {
                    the_field('page_banner_subtitle');
                    }
                    ?></h3>
                <hr class="title__underline"> 
            </div>
        </div>
    </div>
<?php }

function portfolio_files()
{

    // current stylesheets external and within my theme folder
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('aos-css', '//unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    // wp_enqueue_style('main-site-styles', get_stylesheet_uri());
    //Current scripts for the page
    // wp_enqueue_script( 'js-file', get_template_directory_uri() . './dist/main.js', NULL, '1.0', true);
    wp_enqueue_script('aos-js', '//unpkg.com/aos@next/dist/aos.js', NULL, '1.0', true);
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js/', NULL, '1.0', true);
    
    if (strstr($_SERVER['SERVER_NAME'],'digitalportfolio.local')){
        wp_enqueue_script('js-file', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
    } else {
        wp_enqueue_script('our-vendors-js-file', get_theme_file_uri('/bundled-assets/vendors~scripts.957f79dc444b653e4cc2.js'), NULL, '1.0', true);
        wp_enqueue_script('js-file', get_theme_file_uri('/bundled-assets/scripts.9e6f7442ab9b3e1948b1.js'), NULL, '1.0', true);
        wp_enqueue_style('main-styles', get_theme_file_uri('/bundled-assets/styles.9e6f7442ab9b3e1948b1.css'));
    }
    

    /**If comments are enabled by the user, and we are on a post page, 
    then the comment reply script will be loaded. Otherwise, it will not. */
    if (is_singular() &&  comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'portfolio_files');


function porfolio_features()
{
    // generate dynamic title tag depending on the screen you are in
    add_theme_support('title-tag');
    // adding the featured image functionality to blog posts & pages in WordPress
    // You will need to add the argument "thumbnail" to your custom post type in the supports 
    add_theme_support('post-thumbnails');
    //creating custom image sizes for my theme images (simply enables them) use the regenerate thumbnails plugin
    /* To use these specific image sizes, we enter the nickname as the parameter in the_post_thumbnail() 
    ex) the_post_thumbnail('portrait') will pull in that custom size image
    */
    add_image_size('landscape', 400, 260, true);
    add_image_size('portrait', 480, 650, true);
    add_image_size('pageBanner', 1800, 600, true);
}

add_action('after_setup_theme', 'porfolio_features');
