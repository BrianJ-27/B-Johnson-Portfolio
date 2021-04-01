<?php get_header(); 

while(have_posts()){
    the_post(); ?>
    <div class="img__banner--container">
    <div class="img__header--container" style="background-image: url(http://my-portfolio.local/wp-content/uploads/2021/03/Hero-Page.png);">
        
        <!--Banner Title Mark-up Starts Here-->
        <div class="header__title--container">
            <h1 class="header__title">BJ's Blog</h1>
            <h3 class="sub__title">Check out the Latest News!</h3>
            <hr class="title__underline">
        </div>
    </div>
    <!--Header Cool Smoke Effect Mark-up Ends Here-->
</div>

<?php } 
get_footer(); 

?>