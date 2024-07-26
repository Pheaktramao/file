<?php
//TODO:
require_once "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $province = $_POST['province'];

    $query = 'INSERT INTO users (name, age, province) VALUE(:name, :age, :province)';
    $statment = $connection->prepare($query);
    $statment->execute(["name" => $name, "age"=> $age,"province"=> $province]);

    header('location: index.php');
}