<?php
// require "views/resetPassword/new_password.view.php";
// if (isset($_POST['send_email']) && $_POST['email']) {
//     # code...
//     $email = $_POST['email'];
//     $users = mysql_query("SELECT email, password FROM users WHERE email ='$email'");

//     if (mysql_num_rows($select)==1) {
//         # code...
//         while ($row = mysql_fetch_array($select)) {
//             # code...
//             $email = md5($row['email']);
//             $password = md5($row['password']);
//         }
//         $link="<a href='www.samplewebsite.com/controllers/reset/new_Password.controller.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
        
//     }

// }
session_start();
require "../../database/database.php";
require "../../models/employee.model.php";
if(isset($_POST['send_email'])){
   
    $isPwd = forgetPwd($_POST['send_email']);
    if ($isPwd == '1'){
        $_SESSION['pwd'] = '';
        echo forgetPwdValue($_POST['send_email'])[3];
        header('Location: /');
    }else{
        $_SESSION['pwd'] = 'Worng Password!!';
        header("Location: /resetPwd");

    }
    
}

