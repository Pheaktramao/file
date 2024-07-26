function saveProducts(){
    localStorage.setItem('productsData', JSON.stringify(productsData));
}

function loadProducts(){
    let loadProducts = JSON.parse(localStorage.getItem('productsData'));
    if (loadProducts != undefined) {
        productsData = loadProducts
    }
    else{
        saveProducts()
    }
}

function renderProducts() {
    // call load products 

    // remover old tbody 

    // create new table body element as "tBody" 

    // create all table rows depending data from product list 

    // create table row as "tRow"

    // create td element for name as "tdName"
    // add textContent to td name  from product name

    // create td element for quantity as "tdQty"
    // add dataset as id to quantity from product id 

    // create Input element as "qtyInput"
    // add attribute type input to number 
    // add value to input from product quantity 

    // append qtyInput to tdQty 

    // create td element for unit price as "tdUnitPrice"
    // add text content to tdUnitPrice from product price + "$"

    // create td element for total price as "tdTotalPrice"
    // add text content to tdTotalPrice by product price * product quantity +"$"

   
    // append tdName, tdQty, tdUnitPrice, tdTotalPrice to tRow

    // append tRow to tBody 

    // append tbody to table 
}
// products data 
let productsData = {
    products : [],
    latestId : null
};

const tbody = document.querySelector('tbody')
let total = document.querySelector('.total');

// once you started we need to call load data and renderProductsData 
loadProducts()
renderProducts();