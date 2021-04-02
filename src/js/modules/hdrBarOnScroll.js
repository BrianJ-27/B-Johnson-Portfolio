/*--Header Bar changes color when user starts scrolling--*/
export const hdrBarOnScroll = window.onscroll = () => 
{
  let top = window.scrollY;
  if(top >= 250){
    hdrBar.classList.add('onscroll');
  } else {
    hdrBar.classList.remove('onscroll');
  }
}