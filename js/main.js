// **************************************
// JAVASCRIPT SCRIPTS
// **************************************

/*---Global Variables----*/
const openNav = document.querySelector(".header__btn--menu");
const closeNav = document.querySelector(".close__btn");
const hdrBar = document.getElementById('my-hdr-bar');

/*--Toggle navigation once user clicks on nav menu--*/
openNav.addEventListener('click', () => {
    document.getElementById("side__nav").style.left = "0";
});

closeNav.addEventListener('click', () => {
  document.getElementById("side__nav").style.left = "-200px"; 
});

/*--Header Bar changes color when user starts scrolling--*/
window.onscroll = () => {
  let top = window.scrollY;
  if(top >= 250){
    hdrBar.classList.add('onscroll');
  } else {
    hdrBar.classList.remove('onscroll');
  }
}

// //In mobile mode, when a user clicks anywhere on a card the overlay will show
// $('.main__grid--container').click(function(){
//   $('.card__overlay').addClass('.card__overlay');
// });


/*--Add Smooth Scroll to Page--*/

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
