let handleSelect = function() {
    let selects = document.querySelectorAll('.JSselect');
    selects.forEach((select) => {
        select.querySelector('.JSselectBtn').onclick = function() {
            select.classList.toggle('_active');
        }
        select.querySelectorAll('.select__listItem').forEach((li) => {
            li.onclick = function() {
                select.classList.remove('_active');
                // select.querySelector('.select__support').innerHTML = li.innerHTML;
            }
        })

    })

    window.addEventListener('click', function(e) {
        selects.forEach((select) => {
            if (!select.contains(e.target)) {
                select.classList.remove('_active');
            }
        })
    });
}