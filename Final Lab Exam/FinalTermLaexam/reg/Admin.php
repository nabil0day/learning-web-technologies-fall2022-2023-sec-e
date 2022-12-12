<html>
<head>
	<title>Admin</title>
</head>
<body>
	<?php
        session_start();
        echo "<h1>Welcome {$_SESSION['Name']}</h1>";
    ?>
    <a href="adprofile.php">Profile</a><br>
    <a href="changepass.php">Change Password</a><br>
    <a href="userinfo.php">view user</a><br>
    <a href="logout.php">Change Password</a><br>

</body>
</html>