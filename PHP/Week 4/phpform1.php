<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == "") {
        echo "invalid username/password!";
    }else if($username == "admin" && $password=="abc"){
        echo "Welcome Home";
    }else{
        echo "invalid user";
    }


?>