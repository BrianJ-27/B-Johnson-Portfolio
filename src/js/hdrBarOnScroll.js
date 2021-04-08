/*--Header Bar changes color when user starts scrolling--*/

export default class HdrBarOnScroll {
  constructor() {
    this.hdrBar = document.getElementById("my-hdr-bar");
    this.events();
  }

  events() {
    this.hdrBar.addEventListener("scroll", () => {
      let top = window.scrollY;
      if (top >= 250) {
        hdrBar.classList.add("onscroll");
      } else {
        hdrBar.classList.remove("onscroll");
      }
    });
  }
}
