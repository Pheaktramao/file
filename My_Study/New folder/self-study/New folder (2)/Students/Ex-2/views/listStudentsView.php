<link rel="stylesheet" href="assets/css/style.css">
<?php 
    require_once 'models\student.php';
    // TODO
?>

<h1>Student Management</h1>
<button class="addStudent-btn btn teal">
    <a href="views/addStudentView.php">Add Student +</a>
</button>
<div class="container">
    <?php 
    foreach($students as $student):
    ?>
    <div class="card box-shadow" > 
        <div class="card-profile">
            <!-- TODO  -->
            <img src="//TODO" alt="">
        </div>
        <div class="card-info">
            <h2><!-- TODO  --></h2>
            <h4>From batch:<!-- TODO  --></h4>
            <span><b>Email:<!-- TODO  --></span>
            <p><b>Student hobbie:<!-- TODO  --> </p>
        </div>
        <div class="card-btn">
            <button class='btn teal'><a href="views/editStudentView.php?studentID=//TODO">Edit</a></button>
            <button class='btn warning'><a href="views/deleteStudentView.php?studentID=//TODO">Delete</a></button>
        </div>
    </div >
    <?php 
    endforeach;
    ?>
</div>
