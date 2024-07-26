function getvalue(elements) {
    let result = []
    for (const element of elements) {
        if (element.checked) {
            result.push(element.value)
        }
    }
    return result
}

function showcase() {
    const Images = document.querySelectorAll('.image')
    console.log(Images);
    let arrayCheckbox = getvalue(checkboxes)
    console.log(arrayCheckbox);


    if (arrayCheckbox.length === 0) {
        for (const Image of Images) {
            Image.style.display = 'block'
        };
    } else {
        for (let Image of Images) {
            if (arrayCheckbox.includes(Image.getAttribute("data-categories"))) {
                Image.style.display = 'block';
            } else {
                Image.style.display = 'none';
            }
        }
    }

}
const checkboxes = document.querySelectorAll('.category')
for (let checkbox of checkboxes) {
    checkbox.addEventListener('change', showcase)
    // console.log(checkbox);
}