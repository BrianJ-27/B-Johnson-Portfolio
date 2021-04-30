<?php get_header(); ?>

<div class="img__banner--container">
    <div class="bg__video--container">
        <video class="fullscreen-video" loop="true" autoplay src="<?php echo esc_url(get_theme_file_uri('src/vid/smoke-vid.mov')); ?>"></video>
    </div>


    <!-- Banner Title Mark-up Starts Here-->
    <div class="header__title--container blur">
        <h1 class="title__primary">Brian Johnson</h1>
        <h3 class="sub__title">Your Front End Developer</h3>

        <hr class="title__underline">
        <p class="white__txt tagline">The Desire to Learn Always Burns</p>
        <a class="btn__title btn__overlay" href="<?php echo esc_url(site_url('#projects')); ?>"> View My Work <span>&#8628;</span></a>
    </div>
</div>

<!--Main Site Content Starts Here-->
<main class="main__grid--container">
    <!--About Me Section Content Starts Here-->
    <section id="about__me" class="flex__container">
        <h2 class="title__secondary"> The Journey </h2>
        <div class="flex__container--bio">

            <figure class="bio__img--wrapper" data-aos="fade-right" data-aos-duration="2000">
                <img class="img__bio" src="<?php echo esc_url(get_theme_file_uri('src/img/Brian-with-glasses.png')); ?>" alt="Brian With Glasses On">
            </figure>
            <div class="bio__content" data-aos="fade-left" data-aos-duration="2000">
                <h3 class="title__tertiary">A Little About BJ</h3>
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!--About Me Section Content Ends Here-->
    <!--Skill Section Content Starts Here-->
    <section id="skills" class="flex__container" style="background: linear-gradient(to right, rgba(15,12,41,0.8), rgba(4,30,64, 0.8), rgba(15,12,41,0.8)), url('<?php echo esc_url(get_theme_file_uri('src/img/comp-BG.jpg')); ?>');">
        <h2 class="title__secondary">My Abilities</h2>
        <div class="flex__container--skills">

            <div class="skills__container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h3 class="title__tertiary">Front End</h3>
                <div class="skill__grid--container">
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#html5')); ?>"></use>
                        </svg>
                        <figcaption>HTML5</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                        </svg>
                        <figcaption>CSS3</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                        </svg>
                        <figcaption>JavaScript</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#php7')); ?>"></use>
                        </svg>
                        <figcaption>PHP</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#scss')); ?>"></use>
                        </svg>
                        <figcaption>Sass</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#bootstrap4')); ?>"></use>
                        </svg>
                        <figcaption>Bootstrap</figcaption>
                    </figure>
                </div>
            </div>
            <div class="skills__container" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <h3 class="title__tertiary">Web Tools</h3>
                <div class="skill__grid--container">
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#vs-code')); ?>"></use>
                        </svg>
                        <figcaption>VS Code</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#adobe-xd')); ?>"></use>
                        </svg>
                        <figcaption>Adobe XD</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#photoshop')); ?>"></use>
                        </svg>
                        <figcaption>Photoshop</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#mysql')); ?>"></use>
                        </svg>
                        <figcaption>MYSQL</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#wordpress')); ?>"></use>
                        </svg>
                        <figcaption>WordPress</figcaption>
                    </figure>
                    <figure class="img__skill--container">
                        <svg class="skill-icons">
                            <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#github')); ?>"></use>
                        </svg>
                        <figcaption>Git & Github</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!--Skill Section Content Ends Here-->

    <!--Project Section Content Starts Here-->
    <section id="projects" class="flex__container">
        <h2 class="title__secondary">Portfolio</h2>
        <div class="flex__container--cards text-center">
            <div class="carousel__container">
                <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
            </div>
        </div>
    </section>
    <!--Project Section Content Ends Here-->

    <!--References Section Content Starts Here-->
    <section id="references" class="flex__container">
        <h2 class="title__secondary">Recommendations</h2>

        <div class="flex__container--references">
            <?php
            $testimonialPosts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'testimonial'
            ));
            while ($testimonialPosts->have_posts()) {
                $testimonialPosts->the_post(); ?>
                <article class="flex__container--testimonials" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="testimonial__title--container">
                        <img class="img__person rounded-circle img-fluid" src="<?php the_field('testimonial_image'); ?>">
                        <h4 class="title__quartiary"><?php the_title(); ?></h4>
                        <h6 class="title__sixtiary"><?php the_field('job_title'); ?></h6>
                        <h6 class="title__sixtiary"><?php the_field('company_name'); ?></h6>
                    </div>
                    <?php the_content(); ?>
                </article>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <!--References Section Content Ends Here-->

    <!--Contact Section Content Starts Here-->
    <section id="contact" class="flex__container">
        <h2 class="title__secondary">Let's Get Connected</h2>
        <div class="flex__container--contact">
            <div class="contact__icon--container">
                <a class="social__icon--wrapper" href="mailto:johnson8727@hotmail.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="social__icons" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg>
                </a>
                <p class="social__name">Hotmail</p>
            </div>
            <div class="contact__icon--container">
                <a class="social__icon--wrapper" href="https://www.linkedin.com/in/brian-johnson-45161688/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="social__icons" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <p class="social__name">LinkedIn</p>
            </div>
            <div class="contact__icon--container">
                <a class="social__icon--wrapper" href="https://github.com/BrianJ-27" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="social__icons" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                </a>
                <p class="social__name">Github</p>
            </div>
        </div>

    </section>
    <!--Contact Section Content Ends Here-->

</main>
<!--Main Site Content Ends Here-->

<?php get_footer(); ?>