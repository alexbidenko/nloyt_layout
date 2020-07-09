let customeSizeElemes = function() {
    let elems = document.querySelectorAll('.JSfixSize');
    [].forEach.call(elems, (elem, key) => {
        elem.style.width = `${elem.clientWidth / fontHtml}rem`;
        elem.style.height = `${elem.clientHeight / fontHtml}rem`;
    })
}