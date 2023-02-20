import Modal from './modal';

addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('a');

    const isValidHttpUrl = (string) => {
        let url;
        try {
            url = new URL(string);
        } catch (_) {
            return false;
        }
        return url.protocol === "http:" || url.protocol === "https:";
    }

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = e.target.getAttribute('href');

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