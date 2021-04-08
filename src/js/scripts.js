// **************************************
// JAVASCRIPT SCRIPTS
// **************************************
import "../../src/css/style.css"
// import '../../src/scss/style.scss'
import ToggleNav from './mainNav'
import Linkscroll from './scroll'
import HdrBarOnScroll  from './hdrBarOnScroll'

const nav = new ToggleNav();
const scroll = new Linkscroll();
const hdrBar = new HdrBarOnScroll();

if (module.hot) {
    module.hot.accept()
}