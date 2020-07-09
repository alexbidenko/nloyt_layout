let handleUser = function() {
    let button = document.querySelector('.JSuserInfoBtn'),
        userInfo = document.querySelector('.JSuserInfo');

    if (button == null) {
        return false;
    }
    button.onclick = function() {
        userInfo.classList.toggle('_active');
    }

    window.addEventListener('click', function(e) {
        if (!userInfo.contains(e.target) && !button.contains(e.target)) {
            userInfo.classList.remove('_active');
        }
    });
}