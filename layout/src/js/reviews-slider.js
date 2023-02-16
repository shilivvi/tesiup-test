import {tns} from "tiny-slider"

addEventListener('DOMContentLoaded', () => {
    const sliderContainer = document.querySelector('#reviews__slider');

    if(!sliderContainer){
        return;
    }

    tns({
        container: '#reviews__slider',
        items: 1,
        slideBy: 'page',
        gutter: 15,
        mouseDrag: true,
        navPosition: 'bottom',
        prevButton: '.reviews__arrow--prev',
        nextButton: '.reviews__arrow--next',
        loop: false,
        swipeAngle: false,
        responsive: {
            1200: {
                items: 3,
            },
            768: {
                items: 2,
            },
            576: {
                gutter: 25
            }
        }
    });
});
