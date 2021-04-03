!(function (e) {
  var t = {};
  function n(r) {
    if (t[r]) return t[r].exports;
    var o = (t[r] = { i: r, l: !1, exports: {} });
    return e[r].call(o.exports, o, o.exports, n), (o.l = !0), o.exports;
  }
  (n.m = e),
    (n.c = t),
    (n.d = function (e, t, r) {
      n.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: r });
    }),
    (n.r = function (e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (n.t = function (e, t) {
      if ((1 & t && (e = n(e)), 8 & t)) return e;
      if (4 & t && "object" == typeof e && e && e.__esModule) return e;
      var r = Object.create(null);
      if (
        (n.r(r),
        Object.defineProperty(r, "default", { enumerable: !0, value: e }),
        2 & t && "string" != typeof e)
      )
        for (var o in e)
          n.d(
            r,
            o,
            function (t) {
              return e[t];
            }.bind(null, o)
          );
      return r;
    }),
    (n.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return n.d(t, "a", t), t;
    }),
    (n.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (n.p = ""),
    n((n.s = 0));
})([
  function (e, t, n) {
    "use strict";
    n.r(t);
    jQuery('a[href*="#"]')
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (e) {
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          var t = jQuery(this.hash);
          (t = t.length ? t : jQuery("[name=" + this.hash.slice(1) + "]"))
            .length &&
            (e.preventDefault(),
            jQuery("html, body").animate(
              { scrollTop: t.offset().top },
              1e3,
              function () {
                var e = jQuery(t);
                if ((e.focus(), e.is(":focus"))) return !1;
                e.attr("tabindex", "-1"), e.focus();
              }
            ));
        }
      }),
      (window.onscroll = () => {
        window.scrollY >= 250
          ? hdrBar.classList.add("onscroll")
          : hdrBar.classList.remove("onscroll");
      }),
      new (class {
        constructor() {
          (this.openNav = document.querySelector(".header__btn--menu")),
            (this.closeNav = document.querySelector(".close__btn")),
            (this.hdrBar = document.getElementById("my-hdr-bar")),
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
      })(),
      new (void 0)(),
      new (void 0)();
  },
]);
