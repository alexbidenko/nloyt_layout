let handleMenu = function() {
    let button = document.querySelector('.JStoggleMenu'),
        sideBar = document.querySelector('.JSsideBar'),
        topBar = document.querySelector('.JStopBar'),
        content = document.querySelector('.JScontent');
    if (button == null) {
        return false;
    }
    button.onclick = function() {
        sideBar.classList.toggle('_active');
        topBar.classList.toggle('_active');
        content.classList.toggle('_active');
    }
}