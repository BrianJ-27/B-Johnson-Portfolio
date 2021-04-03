<?php get_header(); ?>

<div class="img__banner--container">
    <div class="img__header--container" style="background-image: url(http://my-portfolio.local/wp-content/uploads/2021/03/BJ-Site-Portfolio-BG.png);">
        
        <!--Banner Title Mark-up Starts Here-->
        <div class="header__title--container">
            <h1 class="header__title">Brian Johnson</h1>
            <h3 class="sub__title">Front-End Developer</h3>
            <hr class="title__underline">
        </div>

        <!--Banner Brian's Face Mark-up Starts Here-->
        <div class="my__face--container">
            <img class="my__face" src="<?php echo esc_url(get_theme_file_uri('src/img/BJ-Site-Portfolio-face.png')); ?>" alt="My Face">
        </div>
        <!--Header Brian's Face Mark-up Ends Here-->

        <!--Header Cool Smoke Effect Mark-up Starts Here-->
        <div class="smoke__container">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
            <img class="smoke__img" src="<?php echo esc_url(get_theme_file_uri('src/img/smoke-fumes-transparent-1-.png')); ?>" alt="Cool Smoke Shape 1 ">
        </div>
    </div>
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
            <div class="bio__content" style="background-image: url('http://my-portfolio.local/wp-content/uploads/2021/03/smoke-fumes-transparent-right-.png'); ">
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


            <div class="card">
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

                </a>
                <p class="social__name">Hotmail</p>
            </div>
            <div class="social__icon--wrapper">
                <a href="https://www.linkedin.com/in/brian-johnson-45161688/" target="_blank">

                </a>
                <p class="social__name">LinkedIn</p>
            </div>
            <div class="social__icon--wrapper">
                <a href="https://github.com/BrianJ-27" target="_blank">

                </a>
                <p class="social__name">Github</p>
            </div>
        </div>

    </section>
    <!--Contact Section Content Ends Here-->

</main>
<!--Main Site Content Ends Here-->

<?php get_footer(); ?>