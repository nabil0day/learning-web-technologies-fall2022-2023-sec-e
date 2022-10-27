<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }

?>


<html>

<head>
    <title>HTML Site</title>
</head>

<body>
    <table border="1" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px">
        <tr>
            <td><img src="img/logo.png" alt="Company Logo" style="width: 80px" /><a href="home.php" style="width: 100px" style="margin: 40px">Home</a> | <a href="login.php">Login</a> | <a href="register.php">Registration</a></td>
        </tr>

        <tr>
            <td style="padding: 80px">
                <form method="post" action="loginCheck.php" <?php echo htmlspecialchars($_SERVER[ "PHP_SELF"]);?>>

                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember Me</tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                    <td><input type="submit" name="btn" value="Submit"></td>
                                </td>
                                <td><a href="changePass.php">Forgot Password?</a></td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            </tr>

            <tr align="center">
                <td>
                    <footer style="margin: 10px">Copyright &copy; 2017</footer>
                </td>
            </tr>

    </table>

</body>

</html>