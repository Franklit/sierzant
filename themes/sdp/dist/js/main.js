
const experitse = document.querySelector('.expertise__element');
const megaMenu = document.querySelector('.navigation-menu__mega-menu');

experitse.addEventListener('mouseenter', hover);
megaMenu.addEventListener('mouseenter', hover) ;

function hover(){
    megaMenu.classList.toggle('navigation-menu__mega-menu--hover');
}

experitse.addEventListener('mouseleave', unhover);
megaMenu.addEventListener('mouseleave', unhover );

function unhover(){
    megaMenu.classList.toggle('navigation-menu__mega-menu--hover');
}

