// **************************************
// JAVASCRIPT SCRIPTS
// **************************************

import ToggleNav from './mainNav'
import { coolHdrColor }  from './hdrBarOnScroll'
import { smoothScroll } from './smoothScroll'

const hdrBar = coolHdrColor();
const smooth = smoothScroll();
const nav = new ToggleNav();

const overlays = document.querySelectorAll('.fat-hover-inner');

overlays.forEach( overlay => {
    const newBtn = document.createElement('button');
    overlay.appendChild(newbtn);
    newbtn.innerHTML = "Live Preview";
    console.log(newbtn);
   });
