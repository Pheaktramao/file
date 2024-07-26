let products = [];
let button = document.getElementById('addProductBtn');
let productName = document.getElementById('productName');
let productPrice = document.getElementById('productPrice');
let productListUl = document.getElementById('productsUl');
let productList = document.getElementById('productList');

function saveLocalStorage() {
    localStorage.setItem('tasks', JSON.stringify(products));
}

function getLocalStorage() {
    let productStorages = JSON.parse(localStorage.getItem('tasks'));
    if (productStorages != null) {
        products = productStorages;
        displayProducts();
    }
}

function displayProducts() {
    // Clear the previous list
    if (productListUl) {
        productListUl.remove();
    }

    // Create a new ul if it doesn't exist
    let newUl = document.createElement('ul');
    newUl.setAttribute('id','productsUl');
    // Display the products in the ul
    products.forEach(product => {
        let li = document.createElement('li');
        let textNode = document.createTextNode(`${product.name} - $${product.price}`);
        li.appendChild(textNode);
        newUl.appendChild(li);
    });

    // Append the new ul to the productList
    productList.appendChild(newUl);

    // Update the reference to the new ul
    productListUl = newUl;
    console.log(productList);
}

function romoveStorage() {
    localStorage.removeItem('tasks');
}

function clearStorage() {
    localStorage.clear();
}

function addProduct() {
    let newProduct = {
        name: productName.value,
        price: productPrice.value
    };

    products.push(newProduct);
    saveLocalStorage();
    displayProducts();
    
}

button.addEventListener('click', addProduct);
getLocalStorage();
// romoveStorage()
clearStorage()
console.log("products", products);
