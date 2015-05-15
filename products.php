<?php 
			include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Sixth Sense
		</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<link rel="stylesheet" href="css/products.css" type="text/css">
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
		
		<div id="container">
		<div id="Action"> Action & Adventure </div>
		<div id="action_adventure">
			<?php 
				include "producthandler.php";
				$category = "action";
				products($category);
			?>

		</div>
		<div id="Shooting"> Shooting </div>
		<div id="shooting"> 
			<?php 
				
				$category = "shooting";
				products($category);
			?>		
		</div>
		<div id="Roleplaying"> Roleplaying </div>
		<div id="roleplaying">
			<?php 
				
				$category = "roleplaying";
				products($category);
			?>
			 
		</div>
		<div id="Racing_n_Flying"> Racing & Flying </div>
		<div id="racing_n_flying">
			<?php 
				
				$category = "racing";
				products($category);
			?>		
		</div>
		<div id="Sports"> Sports & Recreation </div>
		<div id="sports"> 
			<?php 
				
				$category = "sporting";
				products($category);
			?>		
		</div> 
		<div id="Family"> Family </div>
		<div id="family">
			<?php 
				
				$category = "family";
				products($category);
			?>		
		</div>
		</div>
		<div id="footer_1">
			<?php 
				include "footer.php";
			?>
		</div>
	</body>
</html>