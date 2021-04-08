(() => {
  "use strict";
  (window.onscroll = () => {
    let e = window.scrollY;
    const t = document.getElementById("my-hdr-bar");
    e >= 250 ? t.classList.add("onscroll") : t.classList.remove("onscroll");
  })(),
    new (class {
      constructor() {
        (this.openNav = document.querySelector(".header__btn--menu")),
          (this.closeNav = document.querySelector(".close__btn")),
          this.events();
      }
      events() {
        this.openNav.addEventListener("click", () => {
          document.getElementById("side__nav").style.left = "0";
        }),
          this.closeNav.addEventListener("click", () => {
            document.getElementById("side__nav").style.left = "-200px";
          });
      }
    })();
})();
