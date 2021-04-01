<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset')?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?> id="main__content" class="website__container">
    <!--Navigation Menu hidden to the right until user clicks the menu-->
    <nav id="side__nav" class="nav__sidebar--container">
        <header class="nav__header--container">
            <img class="logo__img" src="<?php echo get_theme_file_uri('img/bj-logo.jpg');?>" alt="Brian Johnson Logo">
            <p class="nav__title"><?php _e('Brian\'s Portfolio');?></p>
            <div class="close__btn">X</div>
        </header>
        <ul class="nav__wrapper">
            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#home')?>"></use>
                </svg>
                <a class="nav__link scroll" href="#main__content"><?php _e('home');?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#person');?>"></use>
                </svg>
                <a class="nav__link nav__icon2 scroll" href="#about__me"><?php _e('about me');?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#skills');?>"></use>
                </svg>
                <a class="nav__link nav__icon3 scroll" href="#skills"><?php _e('skills');?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#experience')?>"></use>
                </svg>
                <a class="nav__link nav__icon4 scroll" href="#projects"><?php _e('experience');?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#references');?>"></use>
                </svg>
                <a class="nav__link nav__icon5 scroll" href="#references"><?php _e('references');?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo get_theme_file_uri('icons/bjs-icon-map.svg#contact');?>"></use>
                </svg>
                <a class="nav__link nav__icon6 scroll" href="#contact"><?php _e('contact me');?></a>
            </li>
            <!-- <li class="nav__item">
                <button class="btn--resume">
                    <a id="resume__mobile" class="link--resume" href="Brian_Blue_Resume.pdf">resume
                    </a>
                </button>
            </li> -->
        </ul>
    </nav>

    <!--Header Site Content Starts Here-->
    <header class="header__container">
        <div class="img__header--container" style="background-image: url(http://my-portfolio.local/wp-content/uploads/2021/03/BJ-Site-Portfolio-BG.png);">

            <!--Header Bar Mark-up Starts Here-->
            <div id="my-hdr-bar" class="header__bar--container">
                <div id="home__btn" class="header__btn--menu">
                    <div class="menu__btn--burger"></div>
                </div>
                <div class="header__btn--resume">
                    <button class="btn--resume">
                        <a id="resume__mobile" class="link--resume" href="Brian_Blue_Resume.pdf"><?php _e('resume');?>
                        </a>
                    </button>
                </div>
            </div>
            <!--Header Bar Mark-up Ends Here-->

            <div class="header__title--container">
                <h1 class="header__title">Brian Johnson</h1>
                <h3 class="sub__title">Front-End Developer</h3>
                <hr class="title__underline">
            </div>

            <!--Header Brian's Face Mark-up Starts Here-->
            <div class="my__face--container">
                <img class="my__face" src="<?php echo get_theme_file_uri('assets/img/BJ-Site-Portfolio-face.png');?>" alt="My Face">
            </div>
            <!--Header Brian's Face Mark-up Ends Here-->

            <!--Header Cool Smoke Effect Mark-up Starts Here-->
            <div class="smoke__container">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
                <img class="smoke__img" src="<?php echo get_theme_file_uri('assets/img/smoke-fumes-transparent-1-.png');?>" alt="Cool Smoke Shape 1 ">
            </div>
        </div>
        <!--Header Cool Smoke Effect Mark-up Ends Here-->
    </header>
    <!--Header Site Content Ends Here-->