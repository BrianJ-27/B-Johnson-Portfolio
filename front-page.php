<?php get_header(); ?>

<div class="img__banner--container">
    <div class="bg__video--container">
        <video class="fullscreen-video" loop="true" autoplay src="<?php echo esc_url(get_theme_file_uri('src/vid/smoke-vid.mov')); ?>"></video>
    </div>
        
    
        <!-- Banner Title Mark-up Starts Here-->
        <div class="header__title--container blur">
            <h1 class="header__title">Brian Johnson</h1>
            <h3 class="sub__title">Your Front End Developer</h3>
            
            <hr class="title__underline">
            <p class="tagline">The Desire to Learn Always Burns</p>
            <a href=""></a>
        </div>

        <!--Banner Brian's Face Mark-up Starts Here-->
        <!-- <div class="my__face--container">
            <img class="my__face" src="<?php echo esc_url(get_theme_file_uri('src/img/BJ-Site-Portfolio-face.png')); ?>" alt="My Face">
        </div> -->
        <!--Header Brian's Face Mark-up Ends Here-->

        <!--Header Cool Smoke Effect Mark-up Starts Here-->
        <!-- <div class="smoke__container">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
        </div> -->
      
    
    <!--Header Cool Smoke Effect Mark-up Ends Here-->
</div>

<!--Main Site Content Starts Here-->
<main class="main__grid--container">
    <!--About Me Section Content Starts Here-->
    <section id="about__me" class="flex__container">
        <h2 class="title__secondary"> The Journey </h2>
        <div class="flex__container--bio">
            <figure class="bio__img--wrapper">
                <img class="img__bio" src="<?php echo esc_url(get_theme_file_uri('src/img/Brian-with-glasses.png')); ?>" alt="Brian With Glasses On">
            </figure>
            <div class="bio__content">
                <h3 class="title__tertiary">A Little About BJ</h3>
                <p class="bio__text">Developing and Designing for 3+yrs Freelancing. Laid back and I just enjoy
                    coding. When I don't
                    have my face planted in a computer screen, I enjoy spending time with my beautiful wife and
                    being involved in teaching others about the bible.
                </p>
            </div>
        </div>
    </section>
    <!--About Me Section Content Ends Here-->
    <!--Skill Section Content Starts Here-->
    <section id="skills" class="flex__container">
        <h2 class="title__secondary">My Abilities</h2>
        <div class="flex__container--skills">

            <div class="skills__container">
                <h3 class="title__tertiary">Front End</h3>
                <div class="grid__container">
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
            <div class="skills__container">
                <h3 class="title__tertiary">Web Tools</h3>
                <div class="grid__container">
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
                <?php echo do_shortcode('[fat_portfolio name="project-bj"]'); ?>
                <!-- <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/8th-project_800px.png')); ?>" alt="Employee Directory App">
                <div class="card-block">
                    <h4 class="card-title"> Employee Directory:</h4>
                    <div class="card__content-container">


                        <div class="card__technologies--container">
                            <p class="title__overlay">Web Technologies:</p>
                            <svg class="card__icons--js">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                            </svg>
                            <svg class="card__icons--scss">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#scss')); ?>"></use>
                            </svg>
                            <svg class="card__icons--css">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                            </svg>
                        </div>

                        <div class="card__btn--container">
                            <a class="btn__overlay" href="https://brianj-27.github.io/Employee-Directory-Project8/" target="_blank">Live Preview</a>
                            <a class="btn__overlay" href="https://github.com/BrianJ-27/Employee-Directory-Project8" target="_blank">Github</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/7th-project_800px.png')); ?>" alt="8th project of Treehouse Techdegree">
                <div class="card-block">
                    <h4 class="card-title"> Web App Dashboard:</h4>
                    <div class="card__content-container">


                        <div class="card__technologies--container">
                            <p class="title__overlay">Web Technologies:</p>
                            <svg class="card__icons--js">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                            </svg>
                            <svg class="card__icons--scss">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#scss')); ?>"></use>
                            </svg>
                            <svg class="card__icons--css">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                            </svg>
                        </div>

                        <div class="card__btn--container">
                            <a class="btn__overlay" href="https://brianj-27.github.io/app-dashboard/" target="_blank">Live Preview</a>
                            <a class="btn__overlay" href="https://github.com/BrianJ-27/app-dashboard" target="_blank">Github</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/6th-project_800px.png')); ?>" alt="8th project of Treehouse Techdegree">
                <div class="card-block">
                    <h4 class="card-title"> Game Show App:</h4>
                    <div class="card__content-container">


                        <div class="card__technologies--container">
                            <p class="title__overlay">Web Technologies:</p>
                            <svg class="card__icons--js">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                            </svg>

                            <svg class="card__icons--css">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                            </svg>
                        </div>

                        <div class="card__btn--container">
                            <a class="btn__overlay" href="https://brianj-27.github.io/web-game-show-app/" target="_blank">Live Preview</a>
                            <a class="btn__overlay" href="https://github.com/BrianJ-27/web-game-show-app" target="_blank">Github</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/5th-project_800px.png')); ?>" alt="Photo Gallery Web Project">
                <div class="card-block">
                    <h4 class="card-title"> Photo Gallery App:</h4>
                    <div class="card__content-container">


                        <div class="card__technologies--container">
                            <p class="title__overlay">Web Technologies:</p>

                            <svg class="card__icons--js">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                            </svg>
                            <svg class="card__icons--scss">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#scss')); ?>"></use>
                            </svg>
                            <svg class="card__icons--css">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                            </svg>
                            <svg class="card__icons--html5">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#html5')); ?>"></use>
                            </svg>
                        </div>

                        <div class="card__btn--container">
                            <a class="btn__overlay" href="https://brianj-27.github.io/photo-gallery/" target="_blank">Live Preview</a>
                            <a class="btn__overlay" href="https://github.com/BrianJ-27/photo-gallery" target="_blank">Github</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="card">
                <img class="card-img-top img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/Zoo-Institute-website_800px.png')); ?>" alt="8th project of Treehouse Techdegree">
                <div class="card-block">
                    <h4 class="card-title"> Zoo Institute:</h4>
                    <div class="card__content-container">


                        <div class="card__technologies--container">
                            <p class="title__overlay">Web Technologies:</p>

                            <svg class="card__icons--js">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#javascript')); ?>"></use>
                            </svg>
                            <svg class="card__icons--scss">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#scss')); ?>"></use>
                            </svg>
                            <svg class="card__icons--css">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#css3')); ?>"></use>
                            </svg>
                            <svg class="card__icons--php7">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#php7')); ?>"></use>
                            </svg>
                            <svg class="card__icons--wordpress">
                                <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#wordpress')); ?>"></use>
                            </svg>
                        </div>

                        <div class="card__btn--container">
                            <a class="btn__overlay" href="https://brianj-27.github.io/Employee-Directory-Project8/" target="_blank">Live Preview</a>
                            <a class="btn__overlay" href="https://github.com/BrianJ-27/Employee-Directory-Project8" target="_blank">Github</a>
                        </div>
                    </div>
                </div>
            </div> -->

            </div>


        </div>

    </section>
    <!--Project Section Content Ends Here-->

    <!--References Section Content Starts Here-->
    <section id="references" class="flex__container">
        <h2 class="title__secondary">Recommendations</h2>

        <div class="flex__container--references">

            <article class="flex__container--reviews">
                <div class="img__title--container">
                    <img class="img__person rounded-circle img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/randy.jpg')); ?>" alt="Picture of Randy Layne">
                    <h4 class="dark-grey-text review__name">Randy Layne</h4>
                    <h6 class="blue-text review__title">Student Success Specialist</h6>
                    <h6 class="blue-text review__company">Team Treehouse</h6>
                </div>
                <p class="dark-grey-text review__text">
                    Brian is a dedicated developer committed to not just writing programs that work,
                    but focused on best practices, readability and expanding Brian’s knowledge
                    base. Coupled with a strong drive to sharing what he has learned with others in
                    the community, is what made him an easy choice for his role as a Slack Champion.
                    I can strongly recommend Brian as an asset to any development team.
                </p>
            </article>

            <article class="flex__container--reviews">
                <div class="img__title--container">
                    <img class="img__person rounded-circle img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/alicia.jpg')); ?>" alt="Picture of Alicia Mendez">
                    <h4 class="dark-grey-text review__name">Alicia Mendez </h4>
                    <h6 class="blue-text review__title">CEO /Brand President </h6>
                    <h6 class="blue-text review__company">Aletta Bags LLC</h6>
                </div>
                <p class="dark-grey-text review__text">
                    He listened to everything I needed for my business and exceeded my expectations.
                    Brian has an amazing ability to create wonderful sites out of very sophisticated
                    ideas and has excellent functionality and will give my customers the experience
                    I want them to have while shopping at my boutique. I look forward to a continued
                    relationship with Brian to meet the needs of my company.
                </p>
            </article>

            <article class="flex__container--reviews">
                <div class="img__title--container">
                    <img class="img__person rounded-circle img-fluid" src="<?php echo esc_url(get_theme_file_uri('src/img/nestor.png')); ?>" alt="Picture of Nestor Padilla">
                    <h4 class="dark-grey-text review__name">Nestor Padilla</h4>
                    <h6 class="blue-text review__title">Senior Developer</h6>
                    <h6 class="blue-text review__company">Pegasus TransTech</h6>
                </div>
                <p class="dark-grey-text review__text">
                    I interview many developers in my role as senior developer and among the qualities I
                    look for in a candidate are talent, disposition and communication skills. Equally
                    important to these is a desire to learn and grow. Brian has all of these attributes
                    in spades. He is an excellent up and coming web developer who would be an asset to
                    any company.
                </p>
            </article>
        </div>
    </section>
    <!--References Section Content Ends Here-->

    <!--Contact Section Content Starts Here-->
    <section id="contact" class="flex__container">
        <h2 class="title__secondary">Let's Get Connected</h2>
        <div class="flex__container--contact">
            <div class="social__icon--wrapper">
                <a href="mailto:johnson8727@hotmail.com" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                    </svg>
                </a>
                <p class="social__name">Hotmail</p>
            </div>
            <div class="social__icon--wrapper">
                <a href="https://www.linkedin.com/in/brian-johnson-45161688/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                </a>
                <p class="social__name">LinkedIn</p>
            </div>
            <div class="social__icon--wrapper">
                <a href="https://github.com/BrianJ-27" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
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