import * as flsFunctions from "./modules/functions.js";

flsFunctions.openBurgerMenu();
flsFunctions.openBurgerMenuDropDown();

document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector('[data-component="cookie-popup"]');
    if (localStorage.getItem('cookie') !== 'accept') {
        popup.classList.add('open');
    }

    popup.querySelector('[data-role="accept"]').addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();

        localStorage.setItem('cookie', 'accept');
        popup.remove();
    });

});


/*
import Swiper, { Navigation, Pagination } from 'swiper';
const swiper = new Swiper();
*/