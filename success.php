<!DOCTYPE HTML>
<html>
	<head>
		<title>
				
			
		</title>
		<link rel="stylesheet" href="css/success.css" type="text/css">
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION["sess_user"])){
				include "usernavigation.php";
			}	
			else{
			 
				include "navigation.php";	
			}
			$type = $_GET['type'];
		?>
		<div id="suc">
			
			You have Successfully purchased your 
			<?php  
				if($type == "acc"){
					echo "accessory";
				}
				if($type == "game"){
					echo "game";
				}
			
			?> Enjoy !
		</div>
		
	</body>
</html>