<?php require_once('partials/header.php');?>

<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card bg-light" style="width:400px">
                    <div class="card-body">
                        <h4 class="card-title">ADD NEW USER</h4>
                        <form action="create_action.php" method='POST'>
                            <div class="mb-3">
                                <input type="text" name="name" class = "form-control" placeholder="Enter User's Name">
                            </div>
                            <div class="mb-3">
                                <input type="number" name="Age" class = "form-control" placeholder="Enter User's Age">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class = "form-control" placeholder="Enter User's Email">
                            </div>
                            <div class="mb-3">
                                <select name="province" id="" class="form-control" placeholder = "Select User's province">
                                    <option value="BTB">BTB</option>
                                    <option value="PS">PS</option>
                                    <option value="KPC">KPC</option>
                                    <option value="KPS">KPS</option>
                                    <option value="BMC">BMC</option>
                                    <option value="PV">PV</option>
                                    <option value="SV">SV</option>
                                    <option value="KT">KT</option>
                                    <option value="RTK">RTK</option>
                                    <option value="MDK">MDK</option>
                                    <option value="PP">PP</option>
                                </select>
                            </div>
                            <div class="mv-3 d-grid gap-2">
                                <button class="btn btn-secondary">Update Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php require_once('partials/footer.php'); ?>