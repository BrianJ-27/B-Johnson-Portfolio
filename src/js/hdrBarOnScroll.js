/*--Header Bar changes color when user starts scrolling--*/

export const coolHdrColor = window.onscroll = () => {
  let top = window.scrollY;
  const hdrBar = document.getElementById('my-hdr-bar');
  const hdrBarText = document.querySelector('.menu__btn--burger');
  const hdrBarTextPsuedo = document.querySelector(':root');
  const resume = document.getElementById('resume__mobile');
  if(top >= 250){
    hdrBar.classList.add('onscroll');
    hdrBarText.classList.add('onscroll-text');
    hdrBarTextPsuedo.classList.add('onscroll-text');
    resume.classList.add('onscroll-text');
  } else {
    hdrBar.classList.remove('onscroll');
    hdrBarText.classList.remove('onscroll-text');
    hdrBarTextPsuedo.classList.remove('onscroll-text');
    resume.classList.remove('onscroll-text');
  }
}


