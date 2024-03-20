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

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.form-upload-item').forEach(fileWrapper => {
        const input = fileWrapper.querySelector('input[type="file"]');
        const text = fileWrapper.querySelector('.form-upload-item-subtitle');
        if (!input || !text) {
            return;
        }

        input.addEventListener('change', () => {
            const names = Array.from(input.files).map(file => file.name).join(', ');
            const txtNode = document.createTextNode(names);

            requestAnimationFrame(() => {
                text.children[0].nextSibling.remove();
                text.appendChild(txtNode);
            });
        })

    });
});

document.addEventListener('DOMContentLoaded', () => {
    const team = document.querySelector('[data-component="team"]');
    const popup = document.querySelector('[data-role="contact-popup"]')

    if (!team || !popup) {
        return;
    }

    team.querySelectorAll('[data-role="btn-contact"]').forEach((btn) => {
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();

            popup.classList.add('open')
        })
    })
});


/*
import Swiper, { Navigation, Pagination } from 'swiper';
const swiper = new Swiper();
*/