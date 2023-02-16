import {tns} from "tiny-slider"

addEventListener('DOMContentLoaded', () => {
    const sliderContainer = document.querySelector('#reviews__slider');

    if(!sliderContainer){
        return;
    }

    tns({
        container: '#reviews__slider',
        items: 3,
        slideBy: 'page',
        gutter: 25,
        mouseDrag: true,
        navPosition: 'bottom',
        prevButton: '.reviews__arrow--prev',
        nextButton: '.reviews__arrow--next',
        loop: false,
        swipeAngle: false
    });
});
