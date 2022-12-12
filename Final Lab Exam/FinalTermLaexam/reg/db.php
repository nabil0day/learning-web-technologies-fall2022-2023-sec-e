<?php 

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "lasttaskfinal_db";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpass;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('{$user['Id']}', '{$user['Password']}','{$user['Name']}',  '{$user['Email']}', '{$user['Type']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from users where Id = '{$user['Id']}' and Password = '{$user['Password']}'";
        $status = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($status);
        return $user;
    }

    function searchbyname($user){
        $con = getConnection();
        $sql = "select * from users where Name = '{$user['Name']}'";
        $status = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($status);
        return $user;
    }

    function changePass($user){
        $con = getConnection();
        print_r($user);
        $sql = "UPDATE users set Password = '{$user['Password']}' where Name = '{user['Name']'";
        $status = mysqli_query($con, $sql);
        #$user = mysqli_fetch_assoc($status);
        print_r($status);
        return $status;
    }

    function alluser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

?>