<?php

require "../../database/database.php";
require "../../models/employee.model.php";


$food = showFood($_GET['id']);
addFood($food[0], $food[1], $food[3]);
print_r($food);

// header('Location: /');
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               


