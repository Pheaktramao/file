<?php require_once 'partials/header.php';?>
<div class="container mt-5">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
        <div class="card bg-light">
            <div class="card-body">
                <form action="create_action.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="mb-3">
                        <select name="province" id="" class="form-control" placeholder = "Province">
                            <option value="Book 1">BTB</option>
                            <option value="Book 2">BMC</option>
                            <option value="Book 3">PP</option>
                            <option value="Book 4">PS</option>
                        </select>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-primary btn-block">Add New</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?php require_once 'partials/footer.php';?>