let lateralMenu = document.querySelector('.lateral-menu');
let lateralMenuButton = document.querySelector('.lateral-menu__button');
let menuIc = document.querySelectorAll('.menu-ic');
let header = document.querySelector('header');

lateralMenuButton.addEventListener('click', () => {
    menuIc.forEach(ic => {
        ic.classList.toggle('menu-ic--active');
    });

    lateralMenuButton.classList.toggle('lateral-menu__button--active');
    lateralMenu.classList.toggle('lateral-menu--active');
});

window.addEventListener('scroll', () => {
    let switchEffect = false;
    if(window.scrollY > 80 && !switchEffect) {
        header.classList.add('header--color');
        switchEffect = true;
    } else {
        header.classList.remove('header--color');
        switchEffect = false;
    }
});

const currentUrl = window.location.href;
const lateralMenuItems = document.querySelectorAll('.lateral-menu__item a');

lateralMenuItems.forEach(link => {
    const parentNode = link.parentNode;
    const classList = parentNode.classList;
    if (link.href === currentUrl) {
        classList.add('lateral-menu__item--active');
    } else {
        classList.remove('lateral-menu__item--active');
    }
});
