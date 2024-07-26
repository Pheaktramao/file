<link rel="stylesheet" href="../assets/css/style.css">
<?php 
    require_once '../models/student.php';
    // TODO 
?>
<div class="card-alert box-shadow"> 
    <div class="card-alert-header">
        <img src="../assets/images/alert-icon.png" alt="">
    </div>
    <hr>
    <div class="card-alert-profile">
        <img src="// TODO" alt="">
        <h2><!-- TODO --></h2>
        <h4>From batch: <!-- TODO --></h4>
    </div>
    <div class="card-alert-btn">
        <p>Are you sure that you want to delete this student?</p>
        <div>
            <button class='btn teal'><a href="../index.php">Cancel</a></button>
            <button class='btn warning'><a href="../controllers/studentDeleteController.php?studentID=<?=$student['studentID']?>">Delete</a></button>
        </div>
    </div>
</div >