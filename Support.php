<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Support
		</title>
		<link rel="stylesheet" href="css/home.css" type="text/css">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
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
			?>
<div id="be_amazed">
			<label id="amazed">Support </label>
			<br/>
				<br><h3>Top Support Articles</h3></br>
<a href="support/MaxPayne">[6/6/14] Max Payne 3 PC Title Update v130 Notes</a><br>
<a href="support/MortalKombat">Issues & fixes For Mortal Kombat PC</a><br>
<a href="support/GTAiv">WS10 Error in GTA IV</a><br>
<a href="support/WatchDogs">Watch Doges[20/8/14]fix</a><br>
<a href="support/Destiny">Destiny Error Codes Fix</a><br>


</div>

	<?php 
			include "footer.php"
		?>
</body>

</html>
