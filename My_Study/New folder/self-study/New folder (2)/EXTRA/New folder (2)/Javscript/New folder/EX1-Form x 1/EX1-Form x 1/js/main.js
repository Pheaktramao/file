function AddPerson() {
    // to check gender 
    let sex = gender.checked ? gender.value : 'Female';
    
    // create table row name tableRow 
    let tableRow = document.createElement('tr');
    // create table data name tdFirstName 
    // add value of firstName as textContent 
    let tdFirstName =document.createElement('td');
    tdFirstName.textContent = firstName.value;
    // create table data name tdLastName
    // add value of lastName as textContent 
    let tdlastName = document.createElement('td');
    tdlastName.textContent = lastName.value;
    // create table data name tdEmail
    // add value of email as textContent 
    let tdemail = document.createElement('td');
    tdemail.textContent = email.value;
    // create table name tdProvince
    // add value of province as textContent
    let tdprovince = document.createElement('td');
    tdprovince.textContent =province.value
    // create table data name tdFavourite 
    let tdfavourite = document.createElement('td');
    // add value of favourite as textContent
    tdfavourite.textContent = favourite.value;
    // create table data name tdGender 
    let tdgender = document.createElement('td')
    
    // add value of sex as textContent
    tdgender.textContent = sex;

    // append tdFirstName, tdLastName, tdEmail, tdProvince, tdGender, tdFavourite to tableRow
    tableRow.appendChild(tdFirstName);
    tableRow.appendChild(tdlastName);
    tableRow.appendChild(tdemail);
    tableRow.appendChild(tdprovince);
    tableRow.appendChild(tdfavourite);
    tableRow.appendChild(tdgender)
    // append tableRow to tbody 
    tbody.appendChild(tableRow);
}



// Main
const firstName = document.querySelector('#first');
const lastName = document.querySelector('#last');
const email = document.querySelector('#email');
const province = document.querySelector('#province');
const favourite = document.querySelector('#favorite');
let gender = document.querySelector('input[name="gender"]');
const submitButton = document.querySelector('#submit');
const tbody = document.querySelector('tbody');

submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    AddPerson();
});