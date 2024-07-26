let rowTable = document.querySelectorAll('tr');

let fristName = [];
let lastName = [];
let Email= [];
let phone = [];

for (let index of rowTable){
    fristName.push(index.children[0].textContent);
    lastName.push(index.children[1].textContent);
    Email.push(index.children[2].textContent);
    phone.push(index.children[3].textContent);
}
fristName =fristName.slice(1);
lastName =lastName.slice(1);
Email =Email.slice(1);
phone =phone.slice(1);

console.log(fristName);
console.log(lastName);
console.log(Email);
console.log(phone);

