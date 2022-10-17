<?php 
    session_start();

        if(isset($_POST["username"]==false && isset($_POST["password"]==false)))
            {
                $_SESSION["valid"] = "Please enter username and password!"
                header("location:login.php");
            }
        else if(strlen($_POST["username"])<2)
            {
                $_SESSION["valid"] = "Username must contain at least 2 character"
            }
        else if(strlen($_POST["password"])<8)
            {
                $_SESSION["valid"] = "Password must contain at least 8 character" 
            }
        else
        {
            
        }


?>