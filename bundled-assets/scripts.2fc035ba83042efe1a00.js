!function(e){function t(t){for(var r,l,c=t[0],s=t[1],a=t[2],p=0,h=[];p<c.length;p++)l=c[p],Object.prototype.hasOwnProperty.call(n,l)&&n[l]&&h.push(n[l][0]),n[l]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r]);for(u&&u(t);h.length;)h.shift()();return i.push.apply(i,a||[]),o()}function o(){for(var e,t=0;t<i.length;t++){for(var o=i[t],r=!0,c=1;c<o.length;c++){var s=o[c];0!==n[s]&&(r=!1)}r&&(i.splice(t--,1),e=l(l.s=o[0]))}return e}var r={},n={0:0},i=[];function l(t){if(r[t])return r[t].exports;var o=r[t]={i:t,l:!1,exports:{}};return e[t].call(o.exports,o,o.exports,l),o.l=!0,o.exports}l.m=e,l.c=r,l.d=function(e,t,o){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:o})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(l.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)l.d(o,r,function(t){return e[t]}.bind(null,r));return o},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="/wp-content/themes/portfolio-bj/";var c=window.webpackJsonp=window.webpackJsonp||[],s=c.push.bind(c);c.push=t,c=c.slice();for(var a=0;a<c.length;a++)t(c[a]);var u=s;i.push([5,1]),o()}([function(e,t){},function(e,t,o){},,,,function(e,t,o){"use strict";o.r(t);o(0),o(1);const r=window.onscroll=()=>{let e=window.scrollY;const t=document.getElementById("my-hdr-bar"),o=document.querySelectorAll(".menu__bar"),r=document.getElementById("resume__mobile"),n=document.querySelector(".header__btn--resume");if(e>=280){for(let e=0;e<o.length;e++)o[e].classList.add("onscroll-text");t.classList.add("onscroll"),r.classList.add("onscroll-text"),n.classList.add("onscroll-text")}else{t.classList.remove("onscroll"),r.classList.remove("onscroll-text"),n.classList.remove("onscroll-text");for(let e=0;e<o.length;e++)o[e].classList.remove("onscroll-text")}};o(2);r(),jQuery(document).ready((function(){jQuery("a").on("click",(function(e){if(""!==this.hash){e.preventDefault();var t=this.hash;jQuery("html, body").animate({scrollTop:jQuery(t).offset().top},800,(function(){window.location.hash=t}))}}))})),new class{constructor(){this.openNav=document.querySelector(".header__btn--menu"),this.closeNav=document.querySelector(".close__btn"),this.events()}events(){this.openNav.addEventListener("click",()=>{document.getElementById("side__nav").style.left="0"}),this.closeNav.addEventListener("click",()=>{document.getElementById("side__nav").style.left="-200px"})}};jQuery(window).load((function(){jQuery("body").removeClass("preload")}));const n=[{projectLive:"https://brianj-27.github.io/Employee-Directory-Project8",projectGithub:"https://github.com/BrianJ-27/Employee-Directory-Project8"},{projectLive:"https://brianj-27.github.io/app-dashboard",projectGithub:"https://github.com/BrianJ-27/app-dashboard"},{projectLive:"https://brianj-27.github.io/web-game-show-app",projectGithub:"https://github.com/BrianJ-27/web-game-show-app"},{projectLive:"https://brianj-27.github.io/photo-gallery",projectGithub:"https://github.com/BrianJ-27/photo-gallery"},{projectLive:"https://brianj1.sgedu.site/",projectGithub:"https://github.com/BrianJ-27/Fictional-Univ"}],i=document.querySelector(".fat-hover-inner");let l="";for(let e=0;e<n.length;e++){l+=`\n    <div class="card__btn--container">\n        <a class="btn__overlay" href="${n[e].projectLive}" target="_blank">Live Preview</a>\n        <a class="btn__overlay" href="${n[e].projectGithub}" target="_blank">Github</a>\n    </div>\n    `}i.innerHTML=i.innerHTML+l}]);