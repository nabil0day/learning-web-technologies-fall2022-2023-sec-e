<?php
   $username = $_GET['username'];
   $password = $_GET['password'];

   if($username=="" || $password=="" )
   {
    echo"Invalid Username/Password \r\n";
   }
   else if($username=="admin" && $password=="12345")
   {
    echo "Succesfully Login \r\n";
   }
   else
   {
    echo "Iavlid User \r\n";
   }
?>