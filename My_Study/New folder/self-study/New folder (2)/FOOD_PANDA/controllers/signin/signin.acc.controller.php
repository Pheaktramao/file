<?php
session_start();

if (isset($_POST['email']) && isset($_POST['pwd'])){
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    require "../../database/database.php";
    require "../../models/user_info.model.php";
    $user = login($email, $password);
    if (!empty($_POST['email']) and !empty($_POST['pwd'])) {
        if ($_POST["email"] == $user["email"] and $_POST["pwd"]== $user["password"]) {

            // Set session variables
            $_SESSION["email"] = $user['email'];
            $_SESSION["password"] = $user['password'];
            $_SESSION['userid'] = $user['user_id'];
            $_SESSION['role'] = $user['role_id'];
            // Redirect to the dashboard
            header("Location: /");
        }
        else{
            header("Location: /");
        }
    } else {
        header("Location: /");
    }
}