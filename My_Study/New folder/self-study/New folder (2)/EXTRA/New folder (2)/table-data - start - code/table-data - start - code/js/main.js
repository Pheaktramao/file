function getTotal() {
    // TODO 
}

function getQuantities(e) {
    // TODO     
    // update total
}

let quantities = document.querySelectorAll('input');
let total = document.querySelector('.total');
for (let qty of quantities) {
    qty.addEventListener('change', getQuantities);
}

getTotal();