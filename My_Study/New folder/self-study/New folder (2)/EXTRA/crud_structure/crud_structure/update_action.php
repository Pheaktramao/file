<?php
// TODO
require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id =$_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $province = $_POST['province'];

    $query = 'UPDATE users SET name = :name, age = :age, province = :province where id=:id'; 
    $statment = $connection->prepare($query);
    $statment->execute(["name" => $name, "age"=> $age,"province"=> $province, "id"=>$id]);

    header('location: index.php');
}