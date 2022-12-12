<html>
<head>
	<title>FORM</title>
</head>
<body>
	<?php 
	?>
		<form method="post" action="changepasscheck.php" enctype="">
			<fieldset style="width: 12%;">
				<legend><b>Change Passwod</b></legend>
				<table>
					<tr>
						<td>Current Password</td>
						<tr></tr>
						<td><input type="password" name="currPass" value="" ></td>
					</tr>
					<tr>
						<td>New Password</td>
						<tr></tr>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                        <td>New Password</td>
						<tr></tr>
						<td><input type="password" name="newPassword" value="" ></td>
                    </tr>
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							<a href="homeCheck.php"> Home </a>
						</td>
					</tr>
				</table>
				<?php
					if(isset($_GET['err'])){
						echo "invalid current password";
						unset($_GET);
					}
				?>
			</fieldset>
		</form>

</body>
</html>