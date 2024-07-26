function saveProducts(){
    // save data to localStorage 
    localStorage.setItem('productsData', JSON.stringify(productsData));
}

function loadProducts(){
    // load data from localStorage 
    let loadProducts = JSON.parse(localStorage.getItem('productsData'));
    if (loadProducts != undefined) {
        productsData = loadProducts
    }
    else{
        saveProducts()
    }
}
function addProduct() {
    // to check if product id is already set in the list 
    let proId = productsData.latestId;
    if (proId === null || productsData.products.length === 0) {
        proId = 1;
    } else {
        proId = proId + 1;
    }

    // update latest ID to the product list 
    productsData.latestId = proId;

    // create new product and add product to product list 
    let product = {
        id: proId,
        name: productName.value,
        quantity: quantity.value,
        price: price.value,
    }

    // push new product to list product 
    productsData.products.push(product);

    // save data 
    saveProducts()
        
    // clear form 
    productName.value = "";
    quantity.value = "";
    price.value = "";
}

const productName = document.querySelector('#product-name');
const price = document.querySelector('#price');
const quantity = document.querySelector('#qty');
const btn = document.querySelector('button');

// products data 
let productsData = {
    products : [],
    latestId : null
};

// load product 
loadProducts()
btn.addEventListener('click', addProduct);