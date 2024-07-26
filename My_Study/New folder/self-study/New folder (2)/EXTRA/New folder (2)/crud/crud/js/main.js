// get value from input when we click


function setBook() {
    // console.log(input.value);
    if (input.value === "") {
        return alert("Please enter a book");
    }
    let uniqueId = localStorage.getItem('id');
    if (uniqueId === null) {
        uniqueId = 1;
        localStorage.setItem('id', JSON.stringify(uniqueId));

    } else {
        uniqueId = parseInt(uniqueId) + 1
        localStorage.setItem('id', JSON.stringify(uniqueId));
    }

    let book = {
        id: uniqueId,
        title: input.value,
    }

    books.push(book);
    // console.log(books);
    localStorage.setItem('books', JSON.stringify(books));
}


function getBook() {
    for (let book of books) {
        // console.log(book.title);
        let tr = document.createElement('tr');
        let tdId = document.createElement('td');
        let tdTitle = document.createElement('td');
        let tdAction = document.createElement('td');

        let btnDelete = document.createElement('button');
        btnDelete.classList.add('delete');
        btnDelete.textContent = 'delete';

        let btnEdit = document.createElement('button');
        btnEdit.classList.add('edit');
        btnEdit.textContent = 'edit';

        tdAction.appendChild(btnEdit);
        tdAction.appendChild(btnDelete);

        tdAction.appendChild(btnEdit);
        tdAction.appendChild(btnDelete);

        tdId.textContent = book.id;
        tdTitle.textContent = book.title;

        tr.appendChild(tdId);
        tr.appendChild(tdTitle);
        tr.appendChild(tdAction);

        tbody.appendChild(tr);


        let btnDeletes = document.querySelectorAll('.delete');
        for (let btnDelete of btnDeletes) {
            btnDelete.addEventListener('click', deletes);
        }
    }


}
function deletes(event) {
    buttonDelete = event.target.closest("tr");
    buttonDelete.remove();
}


const btnAdd = document.querySelector('#add');
const input = document.querySelector('input');
const tbody = document.querySelector('tbody');
let books = [];
let queryData = localStorage.getItem('books');
if (queryData !== null) {
    books = JSON.parse(queryData)
}

btnAdd.addEventListener('click', setBook);
localStorage.clear();

// call getBook
getBook();



