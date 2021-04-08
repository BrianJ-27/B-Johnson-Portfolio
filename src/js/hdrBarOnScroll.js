/*--Header Bar changes color when user starts scrolling--*/

export const coolHdrColor = window.onscroll = () => {
  let top = window.scrollY;
  const hdrBar = document.getElementById('my-hdr-bar');
  if(top >= 250){
    hdrBar.classList.add('onscroll');
  } else {
    hdrBar.classList.remove('onscroll');
  }
}


