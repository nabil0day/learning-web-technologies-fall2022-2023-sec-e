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
        <td style="padding: 80px"><form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
   
    <fieldset>
      <legend>FORGOT PASSWORD</legend>
      <table>
        <tr>
          <td>Enter Email </td>
          <td>:</td>
          <td><input type="text" name="email" value="" required></td>
        </tr>
        <tr>
          <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
      </table>
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