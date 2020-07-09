let handleCounter = function() {
    let buttons = document.querySelectorAll('.JScounterBtn'),
        operation, value, limit;
    buttons.forEach((button) => {
        button.onclick = function() {
            operation = button.getAttribute('data-action');
            limit = +button.closest('.JScounter').getAttribute('data-limit');
            value = +button.closest('.JScounter').querySelector('.JScounterNum').innerHTML;
            switch (operation) {
                case "+":
                    if (value == limit) {
                        return false;
                    }
                    button.closest('.JScounter').querySelector('.JScounterNum').innerHTML = ++value;
                    break;
                case "-":
                    if (value == 1) {
                        return false;
                    }
                    button.closest('.JScounter').querySelector('.JScounterNum').innerHTML = --value;
                    break;
            }
        }
    })
}