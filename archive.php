<?php get_header(); ?>


    <div class="img__banner--container">
        <div class="img__header--container" style="background-image: url(http://my-portfolio.local/wp-content/uploads/2021/03/Hero-Page.png);">

            <!--Banner Title Mark-up Starts Here-->
            <div class="header__title--container">
                <h1 class="header__title"><?php 
                if(is_category()) {
                    single_cat_title(); echo " Topics";
                }
                if(is_author()){
                    echo "Posts by "; the_author();
                }?></h1>
                <h3 class="sub__title"><?php the_archive_description();?></h3>
                <hr class="title__underline">
            </div>
        </div>
    </div>

    <main>
        <h2 class="title__secondary">Hot Topics</h2>
        <section class="blog-container">
            <?php
                while(have_posts()){
                    the_post(); ?>
                        <div class="main__story-column">
                            
                            <div class="post__img--container">
                                <img src="http://my-portfolio.local/wp-content/uploads/2021/04/Lunch-Box.jpg" alt="HTML Image">
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