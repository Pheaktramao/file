
<?php
// ----get data from user input------
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    session_start();
    require "database/database.php"; // line 7
    require "models/employee.model.php";
    if (isset($_POST['usernames']) && !empty($_POST['usernames'] && !empty($_POST['gender'] && !empty($_POST['phone'])))){
        $usernames = htmlspecialchars($_POST['usernames']);
        $role = htmlspecialchars($_POST['optradio']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST["phone"]);
        $userImg = "IMG-65d9f4f69e5411.43011126.jpg";

        $data = accountExist($email);
        if(count($data) == 0){
            $singup = addUsers($usernames, $email, $password, $gender, $role, $phone, $userImg);
            require "../../models/user_info.model.php";
            $user = login($email, $password);
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION['userid'] = $user['user_id'];

            if($role == 1){
                $_SESSION['role'] = $role;
                header('Location: /');
            }elseif($role == 2){
                $_SESSION['role'] = $role;
                header('Location: /admin');
            }
            
        }else{
            header('Location: /signup');
        }

    }
}
// addUsers();
// $data = getUsers();
// print_r($data);



