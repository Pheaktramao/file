<?php

function createAccount(string $name,string $email,string $password ):bool{
    global $connection;
    $role = "user";
    $statement= $connection->prepare("INSERT INTO users (name,email, password,role)
    VALUES(:name,:email,:password, :role)");
    $statement->execute([
        ":name"=>$name,
        ":email"=>$email,
        ":password"=>$password,
        ":role"=> $role
    ]);
    return $statement->rowCount() >0;
}