let handleCustomers = function() {
    let customers = document.querySelectorAll('.JScustomer');
    customers.forEach((customer) => {
        customer.querySelector('.JScustomerHead').onclick = function() {
            customer.classList.toggle('_active');
        }
    })
}