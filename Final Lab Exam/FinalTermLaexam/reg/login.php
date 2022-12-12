<html>
<head>
	<title>FORM</title>
</head>
<body>
	<?php 
	?>
		<form method="post" action="logincheck.php" enctype="">
			<fieldset style="width: 12%;">
				<legend><b>LOGIN</b></legend>
				<table>
					<tr>
						<td>User Id</td>
						<tr></tr>
						<td><input type="text" name="Id" value="" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name = "Remember" value="Done">Remember Me</td>
                    </tr>
					<tr>
						<td>
							<input type="submit" name="" value="Submit">
							<a href="registration.php"> Register </a>
						</td>
					</tr>
				</table>
				<?php
					if(isset($_GET['err'])){
						echo "invalid credential";
						unset($_GET);
					}
				?>
			</fieldset>
		</form>

</body>
</html>