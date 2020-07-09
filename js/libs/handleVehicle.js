let handleVehicle = function() {
    let vehicalInputs = document.querySelectorAll('.JSvehicalInput'),
        vehicalElems = document.querySelectorAll('.JSvehicalElem'),
        type;
    vehicalInputs.forEach((input) => {
        input.onchange = function() {
            vehicalInputs.forEach((el) => {
                if (el.checked) {
                    type = el.value;
                }
            })
            vehicalElems.forEach((el) => {
                el.classList.remove('_current');
            })
            document.querySelector(`.JSvehicalElem[data-type="${type}"]`).classList.add('_current');
        }
    })
}