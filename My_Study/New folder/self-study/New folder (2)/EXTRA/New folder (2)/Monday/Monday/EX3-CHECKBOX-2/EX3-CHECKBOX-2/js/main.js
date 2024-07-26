function getvalue(elements) {
    let result = [];
    for (const els of elements) {
        if (els.checked) {
            result.push(els.value)
        }
    }
    return result
}
function showCase() {
    const products = document.querySelectorAll('.product')
    let arrayCheckbox = getvalue(checkboxes)

    if (arrayCheckbox.length === 0) {
        for (let product of products) {
            product.style.display = 'block';
        };
    } else {
        for (let product of products) {
            let add = product.lastElementChild.textContent;
            add = add.slice(add.indexOf(":") + 2)

            if (arrayCheckbox.includes(add)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        }
    }

}

const checkboxes = document.querySelectorAll('.category')
for (let checkbox of checkboxes) {
    checkbox.addEventListener('change', showCase)
}