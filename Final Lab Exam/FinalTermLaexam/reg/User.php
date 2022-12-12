<html>
<head>
	<title>User</title>
</head>
<body>
	<?php
        session_start();
        echo "<h1>Wellcome {$_SESSION['Name']}</h1>";
    ?>
    <a href="profile.php">Profile</a><br>
    <a href="changepass.php">Change Password</a><br>
    <a href="logout.php">Change Password</a><br>

</body>
</html>