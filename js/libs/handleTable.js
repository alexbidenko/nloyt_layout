let handleTable = function() {
    let rows = document.querySelectorAll('.table__row'),
        top, left, width, height, elemMaskLeft = document.querySelector('.JSmaskRow[data-dir="left"]'),
        elemMaskTop = document.querySelector('.JSmaskRow[data-dir="top"]'),
        elemMaskRight = document.querySelector('.JSmaskRow[data-dir="right"]'),
        elemMaskBottom = document.querySelector('.JSmaskRow[data-dir="bottom"]'),
        elemsMask = document.querySelectorAll('.JSmaskRow'),
        table = document.querySelector('.JStable');
    rows.forEach((row) => {
        row.onmousedown = function() {
            elemsMask.forEach((el) => {
                el.style.transition = `0s`;
                el.classList.remove('_active');
            })
            width = table.offsetWidth;
            height = row.offsetHeight;

            top = row.getBoundingClientRect().y;
            left = table.getBoundingClientRect().x;

            elemMaskLeft.style.width = `${left / fontHtml}rem`;
            elemMaskLeft.style.height = `${height / fontHtml}rem`;
            elemMaskLeft.style.top = `${top / fontHtml}rem`;

            elemMaskRight.style.width = `${(document.documentElement.clientWidth - (left + width)) / fontHtml}rem`;
            elemMaskRight.style.height = `${height / fontHtml}rem`;
            elemMaskRight.style.top = `${top / fontHtml}rem`;

            elemMaskTop.style.height = `${top / fontHtml}rem`;

            elemMaskBottom.style.height = `${(document.documentElement.clientHeight - (top + height)) / fontHtml}rem`;

            elemsMask.forEach((el) => {
                el.style.transition = `2s linear`;
                el.classList.add('_active');
            })

        }

        document.onmouseup = function() {
            elemsMask.forEach((el) => {
                el.removeAttribute('style');
                el.style.transition = `0s`;
                el.classList.remove('_active');
            })
        }
    })
}