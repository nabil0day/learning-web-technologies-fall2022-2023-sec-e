<html>
<head>
	<title>Profile</title>
</head>
<body>
	<table>
        <tr>
            <td colspan="2">Profile</td>
        </tr>
        <?php
            session_start();
            require_once('db.php');
            $user['Name'] = $_SESSION['Name'];
            $user=searchbyname($user);
            echo "<tr><td>Id</td><td>{$user['Id']}</td></tr>";
            echo "<tr><td>Name</td><td>{$user['Name']}</td></tr>";
            echo "<tr><td>Email</td><td>{$user['Email']}</td></tr>";
            echo "<tr><td>User Type</td><td>{$user['Type']}</td></tr>";
        ?>
        <tr>
            <td colspan="2"><a href="user.php">Go Home</td>
        </tr>
    </table>

</body>
</html>