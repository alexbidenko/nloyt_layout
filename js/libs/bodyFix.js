let bodyFix = function() {
    scroll = 0;
    let fixFlag = false;
    let body = document.getElementsByTagName('body')[0];
    let html = document.getElementsByTagName('html')[0];

    document.addEventListener('scroll', function(e) {
        if (!fixFlag) {
            scroll = window.pageYOffset;
        }
    })

    windowFixRemove = function(scroll) {
        fixFlag = false;
        body.style.position = `static`;
        body.style.top = `unset`;
        html.scrollTop = scroll;
    }

    windowFix = function(scroll) {
        fixFlag = true;
        body.style.position = `fixed`;
        body.style.top = `${(-scroll / fontHtml)}rem`;
    }
}