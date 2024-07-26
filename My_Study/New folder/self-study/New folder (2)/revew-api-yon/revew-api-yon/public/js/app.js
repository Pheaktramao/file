const url = "http://localhost:3000/task";
axios.get(url)
    .then(response => {
        console.log(response.data);
    })
    .catch(err => {
        console.log(err);
    })

function getTask(params){
   
    const taskID = document.getElementById("taskID");
    let card = '';
    card = `<div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Task 1</h5>
        <p class="card-text">Status: <span class="fw-bold text-success">Completed</span></p>
      </div>
    </div>
    </div>`;
    taskID.innerHTML=card;
}