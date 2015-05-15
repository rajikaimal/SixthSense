<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Admin Login	
		</title>
		<link rel="stylesheet" href="adminlogin.css" type="text/css">
	</head>
	<body>
		<div id="admin_login" align="center">
			<h1>Admin Login</h1>
		<form method="post">
			<table>
				<tr><td>Username</td><td><input type="text" name="adminuname" id="uname"></td></tr>
				<tr><td>Password</td><td><input type="password" name="adminpword" id="pword"></td></tr>		
			</table>
				<input type="submit" value="Login" name="adminlogin" id="loginadmin">
		</form>
		<?php 
			include "adminloginhandler.php";
			login_handler();
		?>	
		</div>
		
	</body>
</html>