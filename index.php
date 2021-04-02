<?php get_header(); ?>


    <div class="img__banner--container">
        <div class="img__header--container" style="background-image: url(http://my-portfolio.local/wp-content/uploads/2021/03/Hero-Page.png);">

            <!--Banner Title Mark-up Starts Here-->
            <div class="header__title--container">
                <h1 class="header__title">BJ's Blog</h1>
                <h3 class="sub__title">Check out the Latest News!</h3>
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

                            <div class="post_box_data">
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                <p class="post_box_data">Posted by Brian on 4/1/21 in </p>
                                <p class="post__dynamic--content"><?php the_excerpt();?></p>
                                <p><a href="<?php the_permalink();?>">View More &raquo;</a></p>
                            </div>
                        </div>
            <?php }
            ?>
        </section>
        <div class="side__resource--column">
                        
        </div>
    </main>

<?php get_footer(); ?>