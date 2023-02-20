addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.contacts__icon');
    const length = items.length;
    const delta = 2 * Math.PI * (1 / length);
    const radius = 100;
    const animationStep = 100 / (length * 2);
    const animationStepDeg = 360 / length;
    let animationCurPercent = 0;
    let cssAngle = 180;
    let styles = '<style>';

    for (let i = 0; i < length; i++) {
        const angle = i * delta;
        const x = radius * Math.cos(angle);
        const y = radius * Math.sin(angle);

        items[i].style.left = 100 + x + 'px';
        items[i].style.top = 100 + y + 'px';

        styles += `.contacts__icon:nth-child(${i+1}){transform: translate(-50%, -50%) rotate(${cssAngle}deg)}`;

        cssAngle += (360 / length);

        if(cssAngle > 360){
            cssAngle -= 360;
        }
    }

    styles += '@keyframes contacts-spin{';

    for (let i = 0; i <= length; i++) {
        if(i === 0){
            styles += `${animationCurPercent}%{transform:rotate(180deg)}`;
            animationCurPercent += animationStep;
            styles += `${animationCurPercent}%{transform:rotate(180deg)}`;
            animationCurPercent += animationStep;
        }else{
            styles += `${animationCurPercent}%{transform:rotate(${180 + (animationStepDeg * i)}deg)}`;
            animationCurPercent += animationStep;
            styles += `${animationCurPercent}%{transform:rotate(${180 + (animationStepDeg * i )}deg)}`;
            animationCurPercent += animationStep;
        }
    }

    styles += '100%{transform:rotate(540deg)}';
    styles += '}';
    styles += '</style>';

    document.querySelector('.contacts').insertAdjacentHTML('afterend', styles);
    document.querySelector('.contacts').style.display = null;
});