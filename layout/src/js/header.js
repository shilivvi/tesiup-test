addEventListener('DOMContentLoaded', () => {
    const headerMenu = document.querySelector('#main-menu');
    const headerBurger = document.querySelector('#header-burger');

    if(headerMenu){
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
            })
        })
    }


    if(headerBurger){
        headerBurger.addEventListener('click', e => {
            e.preventDefault();
            headerBurger.classList.toggle('open');
            document.querySelector('header')?.classList.toggle('fixed');
            document.querySelector('main')?.classList.toggle('dis-scroll');
        })
    }

});