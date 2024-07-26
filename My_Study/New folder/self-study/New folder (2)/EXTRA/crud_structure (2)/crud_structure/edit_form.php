<?php require_once 'partials/header.php';?>
<div class="container mt-5">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <?php 
            require_once('database.php'); 
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $statement = $connection->prepare("SELECT * FROM user where id = :id");
                $statement->execute(['id' => $id,]);
                $users = $statement->fetch();
            }
        ?>
        <div class="card bg-light">
            <div class="card-body">
                <form action="create_action.php" method="POST">
                    <input type="hidden" name="id" value="<?= $users['id'] ?>">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" value ="<?=$users['name']?>" >
                    </div>
                    <div class="mb-3">
                        <input type="number" name="age" class="form-control" placeholder="Age" value = "<?= $users['age']?>" >
                    </div>
                    <div class="mb-3">
                        <input type="text" name="province" class="form-control" placeholder = "Province" value = "<?= $users['province']?>">
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-warning btn-block">Update Now</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-3"></div>
</div>
<?php require_once 'partials/footer.php';?>