
const experitse = document.querySelector('.expertise__element');
const megaMenu = document.querySelector('.navigation-menu__mega-menu');



experitse.addEventListener('mouseenter', hover);
megaMenu.addEventListener('mouseenter', hover) ;

function hover(){
    let intViewportWidth = window.innerWidth;
    if(intViewportWidth > 850){

        megaMenu.classList.toggle('navigation-menu__mega-menu--hover');
    }
}

experitse.addEventListener('mouseleave', unhover);
megaMenu.addEventListener('mouseleave', unhover );

function unhover(){
    let intViewportWidth = window.innerWidth;
    if(intViewportWidth > 850){
    megaMenu.classList.toggle('navigation-menu__mega-menu--hover');
    }
}



const hamburgerMenu = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.navigation-menu__ul');

hamburgerMenu.addEventListener('click', ()=>{
    hamburgerMenu.classList.toggle('hamburger--close');
    mobileMenu.classList.toggle('navigation-menu--show');

})