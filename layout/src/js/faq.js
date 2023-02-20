document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.faq__item');

    accordions.forEach(item => {
        item.addEventListener('click', e => {
            const self = e.currentTarget;
            const btn = self.querySelector('.faq__btn');
            const content = self.querySelector('.faq__content');

            e.preventDefault();
            self.classList.toggle('open');

            if(self.classList.contains('open')){
                btn.setAttribute('aria-expanded', true);
                content.setAttribute('aria-hidden', false);
                content.style.maxHeight = content.scrollHeight + 'px';
            }else{
                btn.setAttribute('aria-expanded', false);
                content.setAttribute('aria-hidden', true);
                content.style.maxHeight = null;
            }
        })
    });
});