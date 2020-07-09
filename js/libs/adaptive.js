let adaptive = function() {
    let div = document.createElement('div'),
        scrollWidth;
    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';
    div.style.visibility = 'hidden';
    document.body.appendChild(div);
    scrollWidth = div.offsetWidth - div.clientWidth;
    document.body.removeChild(div);
    windowWidth = document.documentElement.clientWidth - scrollWidth;
    resize = function() {
        windowWidth = document.documentElement.clientWidth - scrollWidth;
        fontHtml = windowWidth / 135;
        let html = document.getElementsByTagName('html')[0];
        html.style.fontSize = `${fontHtml}px`;
        if (windowWidth < 501) {
            fontHtml = windowWidth / 52;
            html.style.fontSize = `${fontHtml}px`;
        }
    }
    resize();
}