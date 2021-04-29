// **************************************
// JAVASCRIPT SCRIPTS
// **************************************
import css from '../css/style.css'
import scss from  '../scss/style.scss'

import ToggleNav from './mainNav'
import { coolHdrColor }  from './hdrBarOnScroll'
import { smoothScroll } from './smoothScroll'
import { over } from 'lodash';

const hdrBar = coolHdrColor();
const smooth = smoothScroll();
const nav = new ToggleNav();

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


// let html ="";
// const parentEl = document.querySelectorAll('.fat-hover-inner .category');
// console.log(parentEl);
// const div = document.createElement('div');
// div.classList.add('card__btn--container');
// urls.forEach( (url, ) => {
    
//     let live = url.projectLive
//     let github = url.projectGithub
//     html = `
//         <a class="btn__overlay" href="${live}" target="_blank">Live Preview</a>
//         <a class="btn__overlay" href="${github}" target="_blank">Github</a> 
//     `;
//     div.innerHTML = html
//     console.log(div);
//     parentEl.forEach(el, ()=> el.appendChild(div));
// });




// let html = '';
// for (let i = 0; i < urls.length; i++){
//     let live = urls[i].projectLive;
//     let github  = urls[i].projectGithub;
//      html += `
//     <div class="card__btn--container">
//         <a class="btn__overlay" href="${live}" target="_blank">Live Preview</a>
//         <a class="btn__overlay" href="${github}" target="_blank">Github</a>
//     </div>
//     `;
// }

// ref.innerHTML = ref.innerHTML + html;  

