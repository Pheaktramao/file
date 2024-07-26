<?php require_once 'partials/header.php'; ?>
<div class="container mt-5">
    <a href="create_form.php" class = "btn btn-primary btn-sm">Add New+</a>
    <table class = "table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'databases.php';
            $statement = $connection->prepare("SELECT * from students");
            $statement->execute();
            $students = $statement->fetchAll();
            foreach ($students as $student):
            ?>
            <tr>
                <td><?= $students['id'];?></td>
                <td><?= $students['name'];?></td>
                <td><?= $students['age'];?></td>
                <td><?= $students['email'];?></td>
                <td>
                    <!-- <a href="edit_form.php"></a>
                    <a href="delete_form.php"></a> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php require_once 'partials/footer.php';?>