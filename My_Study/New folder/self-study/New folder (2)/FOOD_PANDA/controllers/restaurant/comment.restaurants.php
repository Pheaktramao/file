<?php 
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";


if(isset($_POST['comment'])){
    $userID = $_SESSION['userid'];
    $comment = $_POST['comment'];
    $resID = $_GET['id'];
    $date = date("Y.m.d");

    addCmt($userID, $comment, $date, $resID);
    header('Location: /restaurant?id='.$resID);
}
