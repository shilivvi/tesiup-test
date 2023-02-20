import {tns} from "tiny-slider"


addEventListener('DOMContentLoaded', () => {
    tns({
        container: '#managers-slider',
        items: 1,
        slideBy: 'page',
        navPosition: 'bottom',
        mouseDrag: true,
        loop: false,
        swipeAngle: false,
        controls: false
    });
});
