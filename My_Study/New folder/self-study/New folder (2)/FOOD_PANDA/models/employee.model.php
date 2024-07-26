<?php


function getUsers() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}

// restaurant-----------
function getRestaurants() : array
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants");
    $statement->execute();
    return $statement->fetchAll();
}
function detailRes($id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants where restaurant_id = $id");
    $statement->execute();
    return $statement->fetch();
}

// ========

function getResByID($id)
{
    global $connection;
    $statement = $connection->prepare("select * from restaurants where restaurant_id = $id ");
    $statement->execute();
    return $statement->fetch();
}

function getFoods($cid): array {
    global $connection;
    $statement = $connection->prepare("select * from foods where category_id = $cid");
    $statement->execute();
    return $statement->fetchAll();
}

function getCate($id):array {
    global $connection;
    $statement = $connection->prepare("select categories.category_id, categories.name from ((res_categories inner join categories on categories.category_id = res_categories.category_id) inner join restaurants on res_categories.restaurant_id = restaurants.restaurant_id) where restaurants.restaurant_id = $id");
    $statement->execute();
    return $statement->fetchAll();
}

function addUsers($username, $email, $password, $gender, $role, $phoneNumber, $userImg){
    global $connection;
    $statement = $connection->prepare(" insert into users (username, email, password, gender, role_id, phoneNumber, user_img) values (:username, :email, :password, :gender, :role_id, :phoneNumber, :userImg)");
    $statement->execute([
        ':username'=>$username,
        ':email'=>$email,
        ':password'=>$password,
        ':gender'=>$gender,
        ':role_id'=>$role,
        ':phoneNumber'=>$phoneNumber,
        ':userImg'=>$userImg,
    ]);
}

function accountExist($email): array {
    global $connection;
    $statement = $connection->prepare("select * from users where email = :email");
    $statement->execute([
        ':email'=> $email,
    ]);

    if($statement->rowCount() > 0){
        return $statement->fetch();
    }else{
        return [];
    }
    
}

// add food------------

function showFood($id){
    global $connection;
    $statement = $connection->prepare("select * from foods where Food_id = $id");
    $statement->execute();
    return $statement->fetch();
}



function addTolist(){
    global $connection;
    $statement = $connection->prepare("select * from addFood");
    $statement->execute();
    return $statement->fetchAll();
}


function addFood($id, $name, $price) {
    global $connection;
    $statement = $connection->prepare(" insert into addFood (add_id, name, price) values (:add_id, :name, :price)");
    $statement->execute([
        ':add_id'=>$id,
        ':name'=>$name,
        ':price'=>$price
    ]);
}

function deleteFromList(){
    global $connection;
    $statement = $connection->prepare("delete from addFood");
    $statement->execute();
}


//upload pf-----------
function uploadpf($userID, $img){
    global $connection;
    $statement = $connection->prepare("update users set user_img = :img where user_id = :userID");
    $statement->execute([
        ':img'=>$img,
        ':userID'=>$userID,
    ]);
}

function showPf($userID){
    global $connection;
    $statement = $connection->prepare('select * from users where user_id = :userID');
    $statement->execute([
        ':userID'=>$userID
    ]);

    return $statement->fetch();
}


function forgetPwd($email){
    global $connection;
    $statement = $connection->prepare("select * from users where email = :email");
    $statement->execute([':email'=> $email]);
    if ($statement->fetch() != ''){
        return '1';
    }else{
        return '0';
    }
}
function forgetPwdValue($email){
    global $connection;
    $statement = $connection->prepare("select * from users where email = :email");
    $statement->execute([':email'=> $email]);
    return $statement->fetch();
}

///----------filter categories------------
function getAllCate(){
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();   
}

function getFoodbyCate($cateid){
    global $connection;
    $statement = $connection->prepare("select * from foods where category_id = :cateid");
    $statement->execute([':cateid'=> $cateid]);
    return $statement->fetchAll();
}


// ---------get favorite restaurants--------
function getFavorites($userID){
    global $connection;
    $statement = $connection->prepare("select * from ((favorites inner join restaurants on favorites.restaurant_id = restaurants.restaurant_id) inner join users on favorites.user_id = users.user_id) where favorites.user_id = :userID");
    $statement->execute([':userID'=>$userID]);
    return $statement->fetchAll();
}

function addFavorites($favoID, $userID){
    global $connection;
    $statement = $connection->prepare("insert into favorites (restaurant_id, user_id) values (:favoID, :userID)");
    $statement->execute([
        ':favoID'=>$favoID,
        ':userID'=>$userID,

    ]);
    
}


//--add comments-----------

function addCmt($userID, $comment, $date, $resID){
    global $connection;
    $statement = $connection->prepare("insert into comments (date, user_id, restaurant_id, contents) values (:date, :userID, :restaurant_id, :contents)");
    $statement->execute([
        ':date'=>$date,
        ':userID'=>$userID,
        ':restaurant_id'=>$resID,
        ':contents'=>$comment,
    ]);

}

function showCmtOfRes($resID){
    global $connection;
    $statement = $connection->prepare("select * from ((comments inner join restaurants on comments.restaurant_id = restaurants.restaurant_id) inner join users on users.user_id = comments.user_id)where comments.restaurant_id = :resID");
    $statement->execute([':resID'=>$resID]);
    return $statement->fetchAll();
}