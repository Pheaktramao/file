<?php
//TODO:
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once ('database.php');
    if ($_POST['name'] !=="" && $_POST['age'] !=="" && $_POST['province'] !=="") {
        # code...
        $name = $_POST['name'];
        $age = $_POST['age'];
        $province = $_POST['province'];
        
    
        $statement = $connection->prepare("INSERT INTO user(name,age,province) VALUE(:name, :age, :province)");
        $statement->execute([":name" =>$name,":age" => $age,":province"=>$province]);
        
        header('location: index.php');
    }
}
?>