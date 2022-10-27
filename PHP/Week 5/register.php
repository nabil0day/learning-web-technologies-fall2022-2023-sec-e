<html>
  <head>
    <title>HTML Site</title>
  </head>
  <body>
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px"
    >
      <tr>
        <td><img src="img/logo.png" alt="Company Logo" style="width: 80px" /><a href="home.php" style="width: 100px" style="margin: 40px">Home</a> | <a href="login.php">Login</a> | <a href="register.php">Registration</a></td>
      </tr>

      <tr>
        <td style="padding: 80px"><form method="post" action="regCheck.php" enctype="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="" /> Male
                        <input type="radio" name="gender" value= /> Female
                        <input type="radio" name="gender" value="" /> Other
                    </fieldset>
                </tr>
                <tr>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob">
                    </fieldset>
                </tr>
            </table>
            <hr>
            <input type="submit" name="btn" id="Submit">
            <input type="reset" id="Reset">
        </fieldset>
    </form></td>
      </tr>

      <tr align="center">
        <td>
          <footer style="margin: 10px">Copyright &copy; 2017</footer>
        </td>
      </tr>

    </table>

  </body>
</html>

<?php

    session_start();

    
?>