import Modal from './modal';

addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a');

    const isValidHttpUrl = (urlString) => {
        try {
            return Boolean(new URL(urlString));
        }
        catch(e){
            return false;
        }
    }

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');

            console.log(href);
            console.log(isValidHttpUrl(href));

            if (!isValidHttpUrl(href)) {
                e.preventDefault();

                try {
                    scroll({
                        top: document.querySelector(href).offsetTop - document.querySelector('header').offsetTop,
                        behavior: "smooth"
                    });
                } catch (_) {
                    new Modal().open('form-popup');
                }
            }
        })
    });
});