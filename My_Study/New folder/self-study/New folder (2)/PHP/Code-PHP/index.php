<?php require_once ('partials/header.php'); ?>

<div class="container mt-5">
    <a href="create.php" class="btn btn-info" >Add New user+</a>
    <table class = "table tabler-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Province</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require_once ('database.php');
            $statement = $db -> prepare('SELECT * FROM users');
            $statement->execute();
            $users =$statement->fetchAll();
            // var_dump($user);
            ?>
            <?php foreach ($users as $user):?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['name']; ?></td>
                    <td><?= $user['age']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['province']; ?></td>
                    <td>
                        <a href="delete_form.php?id=<?=$user['id'];?>" class = "btn btn-danger">DELETE</a>
                        <a href="edit_form.php?id=<?=$user['id'];?>" class = "btn btn-primary">EDIT</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once('partials/footer.php'); ?>