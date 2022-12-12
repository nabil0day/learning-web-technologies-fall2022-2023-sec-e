<?php
    require_once('db.php');
    session_start();
    $user['Name'] = $_SESSION['Name'];
    $user = searchbyname($user);
    if($user['Type'] == 'User'){
        echo "Wellcome user";
        header('location: User.php');
    }
    if($user['Type'] == 'Admin'){
        echo "Wellcome Admin";
        header('location: Admin.php');
    }
?>