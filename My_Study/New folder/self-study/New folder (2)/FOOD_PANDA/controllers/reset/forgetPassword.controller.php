<?php
require "database/database.php";
require "views/resetPassword/forget_Password.view.php";

// -----------------Code to send to email to reset new password--------------------
$message = "";
$valid ='true';
include("database/database.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $email_reg = mysqli_real_escape_string($connection, $_POST['eail']);
    $details = mysqli_query($connection, "SELECT fullname, email FROM users WHERE email = '$email_reg'");
    if (mysqli_num_rows($details)>0) {
        # code...
        $key = md5(time()+123456789% rand(4000, 55000000));
        $sql = $email_reg;
        $subject = 'Changing password DEMO- psuresh.com.np';
        $msg = 'Please copy this lin'
    }
}