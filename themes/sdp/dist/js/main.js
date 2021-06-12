
const experitse = document.querySelector('.expertise__element');
const navExpertise = document.querySelector('.navigation-menu__expertise');
const megaMenu = document.querySelector('.navigation-menu__mega-menu');

if(!navExpertise){
    experitse.addEventListener('mouseenter', hover);
    megaMenu.addEventListener('mouseenter', hover) ;
    function hover(){
        let intViewportWidth = window.innerWidth;
        if(intViewportWidth > 1000){
    
            megaMenu.classList.toggle('navigation-menu__mega-menu--hover');
            // experitse.classList.add('expertise__element--chevron');

        }
    }
    
    experitse.addEventListener('mouseleave', unhover);
    megaMenu.addEventListener('mouseleave', unhover );
    
    function unhover(){
        let intViewportWidth = window.innerWidth;
        if(intViewportWidth > 1000){
        megaMenu.classList.toggle('navigation-menu__mega-menu--hover');


        }
    }
}



// shrink menu
const siteHeader = document.querySelector('.site-header');
const navLi = document.querySelectorAll('.navigation-menu__ul li');


window.onscroll = function() {scrollFunction()};

function scrollFunction(){
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        siteHeader.classList.add('site-header--smaller');
    }
    
    else{
        siteHeader.classList.remove('site-header--smaller');
    }
}







const hamburgerMenu = document.querySelector('.hamburger');
const mobileMenu = document.querySelector('.navigation-menu__ul');

hamburgerMenu.addEventListener('click', ()=>{
    hamburgerMenu.classList.toggle('hamburger--close');
    mobileMenu.classList.toggle('navigation-menu--show');

})