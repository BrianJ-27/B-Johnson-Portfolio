<?php get_header(); 
    pageBanner();
?>

    <main>
        <h2 class="title__secondary">Hot Topics</h2>
        <section class="blog-container">
            <?php
                while(have_posts()){
                    the_post(); ?>
                        <div class="main__story-column">
                            
                            <div class="post__img--container">
                                <img src="" alt="HTML Image">
                            </div>

                            <div class="post_box_data--container">
                                <h4 class="blog__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <p class="post_box_data">Posted by<?php the_author_posts_link();?>on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(',');?> </p>
                                <p class="post__dynamic--content"><?php the_excerpt();?></p>
                                <p><a href="<?php the_permalink();?>" class="btn__primary">View More &raquo;</a></p>
                            </div>
                        </div>
            <?php }
            echo paginate_links();
            ?>
        </section>
        <div class="side__resource--column">
                        
        </div>
        
    </main>

<?php get_footer(); ?>