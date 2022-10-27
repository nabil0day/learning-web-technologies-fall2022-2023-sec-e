<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
  //echo "invalid username/password!";
  header('location: login.php?err=null');
} else if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']) {
  $_SESSION['status'] = "true";
  header('location: dashboard.php');
} else {
  echo "invalid user";
}
