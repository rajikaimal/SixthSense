<!DOCTYPE HTML>
<html>
	<head>
		<title>
			<?php 
				session_start();
				echo $_SESSION['sess_user']." | Sixth Sense";
			?>
		</title>
		<link rel="stylesheet" href="css/profile.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION["sess_user"])){
				include "usernavigation.php";
			}
			else if(isset($_SESSION["sess_admin"])){
				include "adminnavigation.php";
			}
			else{
				include "navigation.php";	
			}
			?>
		
		<div id="contents" align="center">
			<div id="dash" align="center">
				<a href="profilepay.php"><div class="sub12"><img src="pics/payment.png"><br/>Payments	</div></a>
				<a href="profilesec.php"><div class="sub12"><img src="pics/Security.png"><br/>Security</div></a>
				<a href="profilehis.php"><div class="sub12"><img src="pics/history.png"><br/>History</div></a>
			</div>
		</div>
		
	</body>
	
	
</html>