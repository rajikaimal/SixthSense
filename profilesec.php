<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTMl>
<html>
	<head>
		<title>
			<?php 
				session_start();
				echo $_SESSION['sess_user']." | Sixth Sense";
			?>
		</title>
		<link rel="stylesheet" href="css/profilesec.css" type="text/css">
	</head>
	<body>
		<div id="n1">
		<?php 
			include "profile.php";
		?>
		</div>
		<div>
			<div id="profilePic">
				<a href="profilepword.php"><div class="sub32">
					Change Password
				</div>
				</a>
				<a href="profilephn.php">
				<div class="sub32">
					Change Phone number
				</div>
				</a>
				<div class="sub32">
					
				</div>
			</div>
		</div>
	</body>
</html>