<?php
require_once('database.php');
if ($_GET['id']) {
    # code...
    $id = $_GET['id'];
    $statement = $db -> prepare('DELETE FROM users where id = :id');
    $statement->execute([':id' => $id]);
    $user = $statement -> fetch();
    header('location: index.php');
}