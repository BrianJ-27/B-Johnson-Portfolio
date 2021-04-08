export default class ToggleNav {
    constructor(){
    /*---Global Variables----*/
        this.openNav = document.querySelector(".header__btn--menu");
        this.closeNav = document.querySelector(".close__btn");
        this.events();
    }

    events(){
    /*--Toggle navigation once user clicks on nav menu--*/
        this.openNav.addEventListener('click', () => {
        document.getElementById("side__nav").style.left = "0";
        });

        this.closeNav.addEventListener('click', () => {
        document.getElementById("side__nav").style.left = "-200px"; 
        });
    }
}