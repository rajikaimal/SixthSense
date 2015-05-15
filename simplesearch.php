<!DOCTYPE HTML>
<html>
	<head>
		<title>
			
		</title>
	<link rel="stylesheet" href="css/simplesearch.css" type="text/css">
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
			<label id="simpSearch">Search using a keyword</label>
		<form method="post" name="form1">
			<div id="sip">
				<input type="text" name="t1" onkeyup="aa();" id="searcharea" style="font-size: 20px">
			</div>	
				<div id="d1">
					
				</div>	
			<script>
				function aa(){
					
					xmlhttp = new XMLHttpRequest();
					xmlhttp.open("GET","datafile.php?nm="+document.form1.t1.value,false);
					xmlhttp.send(null);
					document.getElementById("d1").innerHTML = xmlhttp.responseText;
				}
				
				
			</script>
		</form>
	</body>
</html>
