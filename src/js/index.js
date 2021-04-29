// **************************************
// JAVASCRIPT SCRIPTS
// **************************************
import css from '../css/style.css'
import scss from  '../scss/style.scss'

import ToggleNav from './mainNav'
import { coolHdrColor }  from './hdrBarOnScroll'
import { smoothScroll } from './smoothScroll'
import ScrollElements from './scrollReveal'
import { over } from 'lodash';



const hdrBar = coolHdrColor();
const smooth = smoothScroll();
const nav = new ToggleNav();
const scrollReveal = new ScrollElements();

jQuery(window).load(function() {
    jQuery("body").removeClass("preload");
});



const urls = [
    {
        projectLive: 'https://brianj-27.github.io/Employee-Directory-Project8',
        projectGithub: 'https://github.com/BrianJ-27/Employee-Directory-Project8'
    },
    {
        projectLive: 'https://brianj-27.github.io/app-dashboard',
        projectGithub: 'https://github.com/BrianJ-27/app-dashboard'
    },
    {
        projectLive: 'https://brianj-27.github.io/web-game-show-app',
        projectGithub: 'https://github.com/BrianJ-27/web-game-show-app'
    },
    {
        projectLive: 'https://brianj-27.github.io/photo-gallery',
        projectGithub: 'https://github.com/BrianJ-27/photo-gallery',
    },
    {
        projectLive: 'https://brianj1.sgedu.site/',
        projectGithub: 'https://github.com/BrianJ-27/Fictional-Univ'
    }
]