<?php 
$host = "localhost"; //server name 
$database = "php_connection"; //database name
$username = "root"; //username
$password = ""; //password

$db = new PDO("mysql:host=$host;dbname=$database", $username, $password);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (isset($_POST['id'])) {
        $query = $db->query("update posts set name = '$name',description = '$description' where id=" . $_POST['id']);
    }
}

header('Location:index.php');