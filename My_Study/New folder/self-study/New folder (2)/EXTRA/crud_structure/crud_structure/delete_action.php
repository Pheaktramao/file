<?php
// TODO
require_once "database.php";

$id = $_GET['id'];

$query = 'DELETE FROM users WHERE id = :id';
$statment = $connection->prepare($query);
$statment->execute([':id'=> $id]);

header('location: index.php');