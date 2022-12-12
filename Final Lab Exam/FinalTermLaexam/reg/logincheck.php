<?php
    session_start();
    require_once('db.php');
    $user['Id'] = $_POST['Id'];
    $user['Password'] = $_POST['Password'];
    $user = login($user);
    if($user){
        if($_POST['Remember'] == "Done"){
            $_SESSION['Id'] = $user['Id'];
        }
        $_SESSION['Name'] = $user['Name'];
        if($user['Type'] == 'User'){
            echo "Wellcome user";
            header('location: User.php');
        }
        if($user['Type'] == 'Admin'){
            echo "Wellcome Admin";
            header('location: Admin.php');
        }
    }
    else{
        header('location: login.php?err=inv');
    }
?>