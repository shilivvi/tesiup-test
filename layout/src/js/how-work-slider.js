import {tns} from "tiny-slider"

addEventListener('DOMContentLoaded', () => {
    const sliderContainer = document.querySelector('#how-work-slider');

    if(!sliderContainer){
        return;
    }

    const slider = tns({
        container: '#how-work-slider',
        items: 1,
        slideBy: 'page',
        nav: false,
        loop: false,
        swipeAngle: false,
        controls: false,
    });
    const lineBtns = sliderContainer.querySelectorAll('[data-slide]');
    const prevBtns = sliderContainer.querySelectorAll('.how-work-slider__arrow--prev');
    const nextBtns = sliderContainer.querySelectorAll('.how-work-slider__arrow--next');

    lineBtns?.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const slide = parseInt(btn.getAttribute('data-slide'));

            e.preventDefault();
            slider.goTo(slide);
        })
    });

    prevBtns?.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            slider.goTo('prev');
        })
    })

    nextBtns?.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            slider.goTo('next');
        })
    })
});