<?php
require "../../database/database.php";
require "../../models/user.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars ($_POST['email']);
    $password = htmlspecialchars ($_POST['password']);

    $encryptPassword = password_hash($password,PASSWORD_BCRYPT);

    $isCreated = createAccount($name,$email,$encryptPassword);
    if ($isCreated){
        header("Location: /signin");
    }else{
        echo "Something went worg";
    }
}
?>