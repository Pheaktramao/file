<?php
require_once('template/header.php');
$host = "localhost"; //server name 
$database = "php_connection"; //database name
$username = "root"; //username
$password = ""; //password

$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$quary = $db->query('select * from posts');
$posts = $quary->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $query = $db->query("insert into posts(name,description)values('$name','$description')");
    header('Location:index.php');
}

?>

<div class="container mt-3">
    <a href="create.php" class="btn btn-primary">Add New Post</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $post):
                ?>
                <tr>
                    <th scope="row">
                        <?= $key + 1 ?>
                    </th>
                    <td>
                        <?= $post['name'] ?>
                    </td>
                    <td>
                        <?= $post['description'] ?>
                    </td>
                    <td>
                        <a href="delete.php?id=<?= $post['id'] ?>">delete</a>|
                        <a href="edit.php?id=<?= $post['id'] ?>">edit</a>
                    </td>
                </tr>
            <?php endforeach;
            ?>
        </tbody>
    </table>
</div>