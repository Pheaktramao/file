let students = [
    {
        id: 1,
        name: "John",
        email: "john@example.com",
        phone: "123-456-3303"
    },
    {
        id: 2,
        name: "Jane",
        email: "jane@example.com",
        phone: "123-456-3304"
    },
    {
        id: 3,
        name: "Mary",
        email: "mary@example.com",
        phone: "123-456-3305"
    },
    {
        id: 4,
        name: "Peter",
        email: "peter@example.com",
        phone: "123-456-3306"
    },
    {
        id: 5,
        name: "Lisa",
        email: "lisa@example.com",
        phone: "123-456-3307"
    }
];

function createRow(student) {
const tableRow = document.createElement('tr')

const tdId = document.createElement('td')
tdId.textContent = student.id;
// console.log(tdId);
const tdName = document.createElement('td')
tdName.textContent = student.name;

const tdEmail = document.createElement('td')
tdEmail.textContent = student.email;

const tdPhone = document.createElement('td')
tdPhone.textContent = student.phone;

const Action = document.createElement('td')
let button1= document.createElement('button')
let button2= document.createElement('button')
button1.className ="detail"
button2.className ="delete"
button1.textContent ='detail'
button2.textContent ='delete'
Action.appendChild(button1)
Action.appendChild(button2)



tableRow.appendChild(tdId)
tableRow.appendChild(tdName)
tableRow.appendChild(tdEmail)
tableRow.appendChild(tdPhone)
tableRow.appendChild(Action)


tbody.appendChild(tableRow)
}



function showStudentDetails(student) {
   
    document.getElementById("studentCard").style.display = "block"
    const cardId = document.getElementById('cardId');
    const cardName = document.getElementById('cardName');
    const cardEmail = document.getElementById('cardEmail');
    const cardPhone = document.getElementById('cardPhone');
    
    let tr = student.target.closest("tr");
    cardId.textContent = tr.children[0].textContent;
    cardName.textContent = tr.children[1].textContent;
    cardEmail.textContent = tr.children[2].textContent;
    cardPhone.textContent = tr.children[3].textContent;
    
}

// Main
const tbody = document.getElementById('studentsTableBody');
for (let student of students) {
    createRow(student);
}
const btnAll = document.getElementsByClassName('detail')
for (let btn of btnAll){
    btn.addEventListener('click',showStudentDetails)
}

