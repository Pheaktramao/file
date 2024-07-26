function createData(){
    
    let fruitInput = document.getElementById('fruit')
    let fruitName = fruitInput.value;
    let UL = document.querySelector('ul')
    let Li = document.createElement('li')
    Li.textContent = fruitName;
    UL.appendChild(Li)
}

const addfruit = document.getElementById('create')
addfruit.addEventListener('click',createData)
