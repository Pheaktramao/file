<?php 
// CONNECT TO DATABASE AND DO THE FUNCTION TO CREATE 
require_once('database.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['name'] !== "" && $_POST['age'] !== ""  && $_POST['email'] !== "" && $_POST['province'] !== "") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $province = $_POST['province'];

        $statement = $db->prepare('INSERT INTO users(name,age,email,province) values(:name, :age, :email, :province)');
        $statement->execute([":name" => $name, ":age" => $age, ":email" => $email, ":province" => $province]);

        header('location: index.php');
    }
}