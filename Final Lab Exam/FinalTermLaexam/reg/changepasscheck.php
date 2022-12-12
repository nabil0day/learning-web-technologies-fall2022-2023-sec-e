<?php
    require_once('db.php');
    session_start();
    $user['Name'] = $_SESSION['Name'];
    $user = searchbyname($user);
    if($user['Password'] == $_POST['currPass'] && $_POST['Password'] == $_POST['newPassword']){
        $user['Password'] = $_POST['Password'];
        $status = changePass($user);
        if($status){
            header('location: homeCheck.php');
        }
        else{
            echo "Database Error!";
        }
    }
?>