/*--Header Bar changes color when user starts scrolling--*/

 class HdrBarOnScroll {
  constructor() {
    this.hdrBar = document.getElementById("my-hdr-bar");
    this.events();
  }

  events() {
    this.hdrBar.addEventListener("scroll", () => {
      let top = window.scrollY;
      console.log(top);
      if (top >= 250) {
        hdrBar.classList.add("onscroll");
      } else {
        hdrBar.classList.remove("onscroll");
      }
    });
  }
}

export default HdrBarOnScroll
