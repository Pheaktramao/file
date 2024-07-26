<?php
// TODO
require_once ('database.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['name'] !== "" && $_POST['age'] !=="" && $_POST['province'] !== "") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];

        $statement = $connection->prepare ('UPDATE users SET name = :name, age = :age, province = :province');
        $statement->execute([":name" => $name, ":age" => $age, ":province" => $province]);
        $users = $statement->fetch();
        header("location: index.php");
    }
}