<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Success Page</title>
</head>

<body>
	<center>
		<fieldset>
			<?php
			if (
				isset($_SESSION['username'])) {
				echo "Username :" . $_SESSION['username'];
				echo "<br>";
				echo "<br>";

			}
			?>
            <form action="home.php" method="POST">
                <input type="submit" name="logout" value="Logout">
            </form>
            <?php
                if(isset($_POST['logout']))
                {
                    session_unset();
                    session_destroy();
                    header("location: login.php");
                }
                ?>
		</fieldset>
	</center>
</body>

</html>