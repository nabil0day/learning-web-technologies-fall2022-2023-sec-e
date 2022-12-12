<html>
<head>
	<title>FORM</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION["validate"])){
			echo $_SESSION["validate"];
			session_destroy();
		}
	?>
		<form method="post" action="regCheck.php" enctype="">
			<fieldset>
				<legend><b>Registration</b></legend>
				<table>
					<tr>
						<td>Id</td>
						<td><input type="text" name="Id" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="Email" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
						<td>Name</td>
						<td><input type="text" name="Name" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
						<td>Confirm Password</td>
						<td><input type="password" name="ConPassword" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
							<td colspan="2">
								User Type [User/Admin] <br>
								<select name="roles" id="roles">
									<option value="User">User</option>
									<option value="Admin">Admin</option>
								</select>
							</td>
					</tr>
					<tr>
                        <td colspan="2"><hr></td>
                    </tr>
					<tr>
						<td colspan="2">
							<input type="submit" name="" value="Submit">
							<a href="login.php"> login</a>
						</td>
					</tr>
				</table>
				<?php
					if(isset($_GET['err'])){
						echo "invalid request";
						unset($_GET);
					}
					if(isset($_GET['succ'])){
						echo "User Added";
						unset($_GET);
					}
				?>
			</fieldset>
		</form>

</body>
</html>