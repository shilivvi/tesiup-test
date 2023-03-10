addEventListener('DOMContentLoaded', () => {
    const dropDownBtns = document.querySelectorAll('[data-drop-menu]');

    if(window.matchMedia("(hover: hover)").matches){
       return;
    }

    dropDownBtns.forEach(($el) => {
        $el.addEventListener('click', dropDownHandler);
    });
});

const dropDownHandler = (e) => {
    if (e.target.closest('button').classList.contains('show')) {
        closeDropDown(e.target.closest('button'));
    } else {
        openDropDown(e.target.closest('button'));
    }
}

const openDropDown = (el) => {
    const subMenu = el.nextElementSibling;
    el.classList.add('show');
    el.setAttribute('aria-expanded', true);
    subMenu?.classList.add('show');
}

const closeDropDown = (el) => {
    const subMenu = el.nextElementSibling;
    el.classList.remove('show');
    el.setAttribute('aria-expanded', false);
    subMenu?.classList.remove('show');
}