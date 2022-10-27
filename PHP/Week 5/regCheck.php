<?php 

    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conPass = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];


    if($name == "" || $username == "" || $password == "" || $email == "" || $conPass == "" || $gender == "" || $dob == 'dob') {
        header('location: register.php?err=null');
    }else{
        $user = ['name'=>$name, 'username'=>$username, 'password'=>$password, 'email'=>$email, 'password'=>$password, 'password'=>$conPass];
        $_SESSION['user'] = $user;
        header('location: login.php');
    }

?>