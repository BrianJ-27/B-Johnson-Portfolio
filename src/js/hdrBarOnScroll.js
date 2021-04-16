/*--Header Bar changes color when user starts scrolling--*/

export const coolHdrColor = window.onscroll = () => {
  let top = window.scrollY;
  const hdrBar = document.getElementById('my-hdr-bar');
  const menuBars = document.querySelectorAll('.menu__bar');
  const resume = document.getElementById('resume__mobile');
  const resumeBdr = document.querySelector('.header__btn--resume');
  if(top >= 200){
    for(let i = 0; i < menuBars.length; i++){
      menuBars[i].classList.add('onscroll-text');
    }
    hdrBar.classList.add('onscroll');
    resume.classList.add('onscroll-text');
    resumeBdr.classList.add('onscroll-text');
  } else {
    hdrBar.classList.remove('onscroll');
    resume.classList.remove('onscroll-text');
    resumeBdr.classList.remove('onscroll-text');
    for(let i = 0; i < menuBars.length; i++){
      menuBars[i].classList.remove('onscroll-text');
    }
  }
}


