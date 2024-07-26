// ----------------------------------------------------------------------------
// FUNCTIONS
// ----------------------------------------------------------------------------

function addItem() {
  // 1- Create a new task
  // TODO
  newTask = {}
  //  2- Set the description from the text field
  // TODO
  let description = document.querySelector('#description').value;
  newTask.description = description;
  // 3- Set the priority from select field
  // TODO
  let priority = document.querySelector('#priority');
  color = ""
  if (priority == "High") {
    newTask.priority = 1
  } else {
    newTask.priority = 0
  }
  // 4- Add the new object to the array
  // TODO
  tasks.push(newTask)
  console.log(tasks);
}

// ----------------------------------------------------------------------------
// MAIN
// ----------------------------------------------------------------------------

let tasks = [];

// run the function addItem when you click on the button
let addButton = document.getElementById("addButton");
addButton.addEventListener("click", addItem);
