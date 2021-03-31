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


/*--Add Smooth Scroll to Page--*/

(function() {
	scrollTo();
})();

function scrollTo() {
	const links = document.querySelectorAll('.scroll');
	links.forEach(each => (each.onclick = scrollAnchors));
}

function scrollAnchors(e, respond = null) {
	const distanceToTop = el => Math.floor(el.getBoundingClientRect().top);
	e.preventDefault();
	var targetID = (respond) ? respond.getAttribute('href') : this.getAttribute('href');
	const targetAnchor = document.querySelector(targetID);
	if (!targetAnchor) return;
	const originalTop = distanceToTop(targetAnchor);
	window.scrollBy({ top: originalTop, left: 0, behavior: 'smooth' });
	const checkIfDone = setInterval(function() {
		const atBottom = window.innerHeight + window.pageYOffset >= document.body.offsetHeight - 2;
		if (distanceToTop(targetAnchor) === 0 || atBottom) {
			targetAnchor.tabIndex = '-1';
			targetAnchor.focus();
			window.history.pushState('', '', targetID);
			clearInterval(checkIfDone);
		}
	}, 100);
}