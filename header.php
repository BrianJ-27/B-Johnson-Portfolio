<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="main__content" class="website__container preload">
    <!--Navigation Menu hidden to the right until user clicks the menu-->
    <nav id="side__nav" class="nav__sidebar--container">
        <header class="nav__header--container">
            <!-- <img class="logo__img" src="<?php echo esc_url(get_theme_file_uri('src/img/bj-logo.jpg')); ?>" alt="Brian Johnson Logo"> -->
            <p class="nav__title"><?php _e('Brian\'s Portfolio'); ?></p>
            <div class="close__btn">X</div>
        </header>
        <ul class="nav__wrapper">
            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#home')); ?>"></use>
                </svg>
                <a class="nav__link scroll" href="<?php echo esc_url(site_url()); ?>"> <?php _e('home'); ?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#person')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon2 scroll" href="<?php echo esc_url(site_url('#about__me')); ?>"><?php _e('about me'); ?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#skills')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon3 scroll" href="<?php echo esc_url(site_url('#skills')); ?>"><?php _e('skills'); ?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#experience')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon4 scroll" href="<?php echo esc_url(site_url('#projects')); ?>"><?php _e('experience'); ?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#references')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon5 scroll" href="<?php echo esc_url(site_url('#references')); ?>"><?php _e('references'); ?></a>
            </li>

            <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#contact')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon6 scroll" href="<?php echo esc_url(site_url('#contact')); ?>"><?php _e('contact me'); ?></a>
            </li>
            <!-- <li class="nav__item">
                <svg class="nav__icon">
                    <use xlink:href="<?php echo esc_url(get_theme_file_uri('src/icons/bjs-icon-map.svg#blog')); ?>"></use>
                </svg>
                <a class="nav__link nav__icon6 scroll" href="<?php echo esc_url(site_url('/blog')); ?>"><?php _e('bj\'s blog'); ?></a>
            </li> -->
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
        <!--Header Bar Mark-up Starts Here-->
        <div id="my-hdr-bar" class="header__bar--container">

            <div id="home__btn" class="header__btn--menu">
                <div class="menu__bar"></div>
                <div class="menu__bar"></div>
                <div class="menu__bar"></div>
            </div>
            
            <div class="header__btn--resume">
                <a id="resume__mobile" class="link--resume btn__overlay" href="<?php echo 'http://digitalportfolio.local/wp-content/uploads/2021/04/Brian-Web-Developer-Resume.pdf'; ?>"><?php _e('resume'); ?></a>
            </div>
        </div>
        <!--Header Bar Mark-up Ends Here-->
    </header>
    <!--Header Site Content Ends Here-->