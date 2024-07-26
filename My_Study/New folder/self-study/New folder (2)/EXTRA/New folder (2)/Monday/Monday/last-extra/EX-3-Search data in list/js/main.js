function searchfruit(event) {
    const searchText = event.target.value.toLowerCase();
    const fruitList = document.querySelectorAll('li')

    for (const fruit of fruitList) {
        const title = fruit.textContent.toLowerCase();
        if (title.includes(searchText)) {
            fruit.style.display = 'block'
        }else {
            fruit.style.display = 'none'
        }
    }
}

const searchfruitInput = document.querySelector('input')
searchfruitInput.addEventListener('keyup', searchfruit)