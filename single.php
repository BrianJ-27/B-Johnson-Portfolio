<?php get_header(); ?>

<main>
    <section class="post-container">
        <?php
        while(have_posts()){
            the_post(); 
            pageBanner();
            ?>
                    <!--Banner Title Mark-up Starts Here-->
                    <div class="header__title--container">
                        <h1 class="header__title"><?php the_title(); ?></h1>
                        <h3 class="sub__title">Don't Forget to Replace Me Later</h3>
                        <hr class="title__underline">
                    </div>
                </div>
            </div> -->
            <div class="post-content">
                <div class="link-info">
                    <h3><a href="<?php echo site_url('/blog'); ?>">Blog Home</a></h3>
                    <p class="post_box_data">Posted by<?php the_author_posts_link();?>on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(',');?> </p>
                </div>
                <div class="dynamic-content">
                    <?php the_content();?>
                </div>
            </div>
        <?php }?>
    </section>
</main>
<?php get_footer(); ?>