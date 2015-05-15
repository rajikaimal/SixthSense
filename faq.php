<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			FAQ
		</title>
		<link rel="stylesheet" href="css/faq.css" type="text/css">
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
		<div id="FAQ">
			<label id="faq">FAQ</label>
			<a href="faqq.php">Ask a Question</a> <a href="faqa.php"> Answer Questions</a>
			
		</div>
		
	</body>
	<footer>
		
		
	</footer>
	
	
	
	
</html>