
<?php

require "database/database.php";
require "models/employee.model.php";


$pic = array(
  'assets/images/popular1.png" class="img-fluid item-img w-100',
  'assets/images/popular2.png" class="img-fluid item-img w-100',
  'assets/images/popular3.png" class="img-fluid item-img w-100',
  'assets/images/popular4.png" class="img-fluid item-img w-100',
  'assets/images/popular5.png" class="img-fluid item-img w-100',
  'assets/images/popular6.png" class="img-fluid item-img w-100',
  'assets/images/popular7.png" class="img-fluid item-img w-100',
  'assets/images/popular8.png" class="img-fluid item-img w-100',
  ''
);

if (isset($_GET['addID'])){
  $food = showFood($_GET['addID']);
  $fl = addTolist();
  session_start();
  $_SESSION = 'true';
  foreach ($fl as $value) {
    if ($value[0] == $_GET['addID']){
      $_SESSION = 'false';
    }
  }
  if ($_SESSION == 'true'){
    addFood($food[0], $food[1], $food[3]);
  }
}
if(isset($_SESSION['cateid'])){
  $categories = getFoodbyCate($_SESSION['cateid']);
 }
$data = getRestaurants();
$foodAdd = addTolist();



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Gurdeep Osahan" />
  <meta name="author" content="Gurdeep Osahan" />
  <link rel="icon" type="image/png" href="img/logo_web_red.png" />
  <title>Foodride - Online Food Ordering Website Template</title>

  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css" />

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <link href="vendor/css/style.css" rel="stylesheet" />

  <link href="vendor/sidebar/demo.css" rel="stylesheet" />
</head>

<body class="fixed-bottom-bar">