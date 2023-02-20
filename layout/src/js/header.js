import { throttle } from './throttle';

addEventListener('DOMContentLoaded', () => {
    const headerMenu = document.querySelector('#main-menu');
    const headerBurger = document.querySelector('#header-burger');
    const header = document.querySelector('header');
    const headerOffset = header.getAttribute('data-offset') ?? 300;

    const fixHeader = () => {
        const scrollDistance = window.scrollY;

        if(scrollDistance >= headerOffset){
            if(!header.classList.contains('fixed')){
                header.nextElementSibling.style.marginTop = header.offsetHeight + 'px';
            }
            header.classList.add('fixed');
        }else{
            header.nextElementSibling.style.marginTop = null;
            header.classList.remove('fixed');
        }
    }

    if(headerMenu){
        if(!window.matchMedia("(hover: hover)").matches){
            const hasChildrenBtns = headerMenu.querySelectorAll('.menu-item-has-children a');

            hasChildrenBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const subMenu = btn.nextElementSibling;

                    e.preventDefault();

                    if (btn.classList.contains('show')) {
                        btn.classList.remove('show');
                        btn.setAttribute('aria-expanded', false);
                        subMenu?.classList.remove('show');
                    } else {
                        btn.classList.add('show');
                        btn.setAttribute('aria-expanded', true);
                        subMenu?.classList.add('show');
                    }
                });
            });
        }
    }


    if(headerBurger){
        headerBurger.addEventListener('click', e => {
            e.preventDefault();
            headerBurger.classList.toggle('open');
            document.querySelector('header')?.classList.toggle('fixed');
            document.body.classList.toggle('dis-scroll');
        })
    }

    if(header){
        window.addEventListener('scroll', throttle(fixHeader, 150));
    }

});