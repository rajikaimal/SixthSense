<!DOCTYPE HTML>
<html>
	<head>
		<title>
			
		</title>
		<link rel="stylesheet" href="css/registration.css" type="text/css">
		<?php 
			mysql_connect('localhost','root','rajika123') or die('Couldn\'nt Connect');
			mysql_select_db('SixthSense');
		?>
	</head>
	<body>
		<div id="container">
			<div id="reg_con">
				<form id="registration">
				<table id="reg">
					<tr><td>Firstname</td><td><input type="text" name="fname"></td></tr>
					<tr><td>Lastname</td><td><input type="text" name="lname"></td></tr>
					<tr><td>E-mail</td><td><input type="text" name="email"></td></tr>
					<tr><td>Username</td><td><input type="text" name="uname"></td></tr>
					<tr><td>Password</td><td><input type="password" name="pword"></td></tr>
					
				</table>
					<input type="button" name="sign_up" value="Sign up">
				</form>	
			</div>
		</div>
	</body>
</html>