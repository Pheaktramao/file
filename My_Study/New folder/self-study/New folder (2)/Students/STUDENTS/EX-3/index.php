<?php require_once 'partials/header.php'; ?>
<div class="container mt-5">
    <div class="d-flex justify-content-end align-items-center mb-5">
        <a href="create_form.php" class="btn btn-primary btn-sm">Add New +</a>
    </div>
    <?php
    // your code here  
    ?>
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="display-3"></h1>
                <p class="card-text"></p>
                <span></span>
            </div>
            <div class="card-footer d-flex justify-content-end align-items-center gap-2">
                <a href="edit_form.php" class="btn btn-primary btn-sm">edit</a>
                <a href="delete_action.php" class="btn btn-danger btn-sm">delete</a>
            </div>
        </div>
   
</div>
<?php require_once 'partials/footer.php'; ?>