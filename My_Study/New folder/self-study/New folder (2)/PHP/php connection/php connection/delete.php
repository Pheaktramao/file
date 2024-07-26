<?php 
$host = "localhost"; //server name 
$database = "php_connection"; //database name
$username = "root"; //username
$password = ""; //password

$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

$quary = $db->query('delete from posts where id ='.$_GET['id']);
header('Location:index.php');
