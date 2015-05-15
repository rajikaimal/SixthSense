<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Login | Sixth Sense	
		</title>
		<link rel="stylesheet" href="css/login.css" type="text/css">
	</head>
	<?php 
	include "dbConnect.php";
	?>
	<body>
		<div id="vid" style="opacity: 0.7">
		<video autoplay muted width="100%" height="100%" loop autoplay="autoplay">
			
			<source src="blur.mp4" type="video/mp4" >
			
		</video>
		
		</div>
		<div id="container" align="left">
			<div id="login_form">
				<form id="login" method="post">
					<table id="login_table">
					<tr><td>Email </td><td> <input type="text" name="email" id="uname"></td></tr>
					<tr><td>Password </td><td> <input type="password" name="pword" id="pword"></td><tr>
					
					
					<tr><td><input type="submit" name="submit" id="login_submit" value="Sign in"></td></tr>
					<tr><td>
						<?php 
							include "loginhandler.php";
						?>
						
					</td></tr>
					
					
					</table>
					
				</form>
				<label id="newaccount">Don't have a Sixth sense account ?<a href="Forms/Registration.php" id="sign_up"> Sign up now !</a></label>
			</div>
		</div>
		<div id="footer1">
			<?php 
			include "footer.php";
		?>
		</div>
	</body>
	
</html>