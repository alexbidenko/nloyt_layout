let handleCircle = function() {
    let indexElem = 0,
        circle = {};
    let animateCircle = function(t) {
        let i = t.getAttribute('data-index');
        circle[i].intervalId = setInterval(() => {
            windowWidth < 500 ? circle[i].radius = circle[i].radiusMobile : circle[i].radius = circle[i].radiusDesktop;
            t.querySelector('circle._curry').setAttribute('style', `stroke-dasharray:${circle[i].progress}px ${2 * Math.PI * circle[i].radius * fontHtml}px;`);
            t.setAttribute('data-val', parseInt(circle[i].count));
            circle[i].count += circle[i].percent / 140;
            circle[i].progress = 2 * Math.PI * fontHtml * circle[i].radius * (circle[i].count / 100);
            if (circle[i].count > circle[i].percent) {
                circle[i].progress = 2 * Math.PI * fontHtml * circle[i].radius * (circle[i].percent / 100);
                t.querySelector('circle._curry').setAttribute('style', `stroke-dasharray:${circle[i].progress}px ${2 * Math.PI * circle[i].radius * fontHtml}px;`);
                t.setAttribute('data-val', parseInt(circle[i].percent));
                clearInterval(circle[i].intervalId);
            }
        }, 5)
    }

    setCircle = function(t, resize) {
        let i = t.getAttribute('data-index');
        let percent = circle[i].percent;
        let radius;
        windowWidth < 500 ? radius = circle[i].radiusMobile : radius = circle[i].radiusDesktop;
        let circles = t.querySelectorAll('circle');
        [].forEach.call(circles, function(el) {
            el.setAttribute('r', fontHtml * radius);
        })
        t.classList.add(`_${parseInt(percent / 33) == 3 ? parseInt(percent / 33):parseInt(percent / 33) + 1}`)
        if (!resize) {
            t.setAttribute('data-val', 0);
            t.querySelector('circle._curry').setAttribute('style', `stroke-dasharray:${0}px ${2 * Math.PI * radius * fontHtml}px;`);
            animateCircle(t);
            t.classList.add('_complete');
        } else {
            t.querySelector('circle._curry').setAttribute('style', `stroke-dasharray:${2 * Math.PI * fontHtml * radius * (percent / 100)}px ${2 * Math.PI * radius * fontHtml}px;`);
        }

    };
    let elems = document.querySelectorAll('.JScircle');
    elems.forEach((elem) => {
        elem.setAttribute('data-index', indexElem);
        circle[indexElem] = {
            index: indexElem,
            percent: parseFloat(elem.getAttribute('data-val')),
            radiusDesktop: parseFloat(elem.getAttribute('data-radiusDesktop')),
            radiusMobile: parseFloat(elem.getAttribute('data-radiusMobile')),
            radius: null,
            progress: 0,
            count: 0,
            intervalId: null
        };
        indexElem++;
        setCircle(elem);
    })

}