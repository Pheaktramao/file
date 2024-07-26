const { response } = require("express");

const container = document.querySelector('#container');
function getUsers(res) {
   // TODO
   const cardDetail = '';
   cardDetail = `
   <div class="card mb-2">
   <div class="card-body d-flex justify-content-between">
       <h5 class="card-title">EX1</h5>
       <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">View</button>
   </div>
</div> 
<div class="modal fade" id="myModal">
   <div class="modal-dialog">
       <div class="modal-content">

       
       <div class="modal-header">
           <h4 class="modal-title">Modal Heading</h4>
           <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
       </div>

    
       <div class="modal-body">
           Modal body..
       </div>

       
       <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
       </div>

       </div>
   </div>
   </div> `;
   console.log(cardDetail);
   container.appendChild(cardDetail);
   listTask();
}

function listTask() {
    const url = "http://localhost:3000";
    axios.get(url + "/users")
        .then(response=>{
            console.log(response.data.data);
        })
        .catch(err=>{
            console.log(err);
        })
}

// TODO with axios.get() ...
