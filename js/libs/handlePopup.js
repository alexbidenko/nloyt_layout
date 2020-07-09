let handlePopup = function() {
    let buttons = document.querySelectorAll('.JSpopupBtn'),
        action, name, popup;

    buttons.forEach((button) => {
        button.onclick = function() {
            action = button.getAttribute('data-action');
            name = button.getAttribute('data-name');
            popup = document.querySelector(`.JSpopup[data-name="${name}"]`);
            switch (action) {
                case "open":
                    popup.classList.add('_active');
                    windowFix(scroll);
                    break;
                case "close":
                    popup.classList.remove('_active');
                    windowFixRemove(scroll);
                    break;
            }
        }
    })

    window.addEventListener('click', function(e) {
        let currentBtn;
        document.querySelectorAll('.JSpopup').forEach((popup) => {
            currentBtn = document.querySelector(`.JSpopupBtn[data-name="${popup.getAttribute('data-name')}"][data-action="open"]`);
            if (currentBtn != null) {
                if (!popup.querySelector('.popupBox__inner').contains(e.target) && (!currentBtn.contains(e.target))) {
                    popup.classList.remove('_active');
                    windowFixRemove(scroll);
                }
            } else {
                if (!popup.querySelector('.popupBox__inner').contains(e.target)) {
                    popup.classList.remove('_active');
                    windowFixRemove(scroll);
                }
            }
        })
    });
}