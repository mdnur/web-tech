<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
<center>
	<fieldset>
		<legend><i>Login Page</i></legend>
		<form method = "post" action ="login.php">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" required> </td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="Login"></td>
					<td><input type="submit" name="reg" value="New user?"></td>
				</tr>
			</table>
		</form>
	</fieldset>
</center>
</body>
</html>
<?php
	if(isset($_POST['reg']))
	{
		header("location: reg.php");
	}


	if(isset($_POST['login']))
	{
		//echo "Registration successfull";
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "mdnur" && $password == "password")
		{
			session_start();
			//database query
			
			$_SESSION['username'] = $username;
			// $_SESSION['password'] = $password;
			header("location:home.php");
		}
		else
		{
			echo "<i style='color:red;'>User Credential not correct doesn't match</i>";
		}
	}
?>