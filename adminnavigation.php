<?php
	session_start();
	if(!isset($_SESSION["sess_admin"])){
		header("location:login.php");
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Sixth Sense
		</title>
		<link rel="stylesheet" href="css/adminnavigation.css" type="text/css">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		
	</head>
	<body>
		<div id="banner">
			<embed width="100%" src="animation.swf" id="bannerX">
		</div>
		<div id="navigation"> 
			<nav>
				<ul id="nav">
					<li id="home"><a href="home.php"><img src="pics/home.png"></a></li>
					<li><a href="products.php?console=xbox360">XBOX 360</a>
						<ul class="sub1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Shooting</a></li>
							<li><a href="#">Roleplaying</a></li>
							<li><a href="#">Racing & Flying</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Family</a></li>
							<li><a href="console.php?console=xbox360">Meet XBOX 360</a></li>
							<li><a href="accessories.php?acc=xbox360">Accessories</a></li>
						</ul>
					</li>
					<li><a href="products.php?console=xboxone">XBOX ONE</a>
						<ul class="sub1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Shooting</a></li>
							<li><a href="#">Roleplaying</a></li>
							<li><a href="#">Racing & Flying</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Family</a></li>
							<li><a href="console.php?console=xboxone">Meet XBOX one</a></li>
							<li><a href="accessories.php?acc=xboxone">Accessories</a></li>
						</ul>
					</li>
					<li><a href="products.php?console=ps4">PS 4</a>
						<ul class="sub1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Shooting</a></li>
							<li><a href="#">Roleplaying</a></li>
							<li><a href="#">Racing & Flying</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Family</a></li>
							<li><a href="console.php?console=ps4">Meet PS4</a></li>
							<li><a href="accessories.php?acc=ps4">Accessories</a></li>
						</ul>
					</li>
					<li><a href="products.php?console=ps3">PS 3</a>
						<ul class="sub1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Shooting</a></li>
							<li><a href="#">Roleplaying</a></li>
							<li><a href="#">Racing & Flying</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Family</a></li>
							<li><a href="console.php?console=ps3">Meet PS3</a></li>
							<li><a href="accessories.php?acc=ps3">Accessories</a></li>
						</ul>
					</li>
					<li><a href="products.php?console=pc">PC </a>
						<ul class="sub1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Shooting</a></li>
							<li><a href="#">Roleplaying</a></li>
							<li><a href="#">Racing & Flying</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="accessories.php?acc=pc">Accessories</a></li>
						</ul>
					</li>
					<li id="search"><a href="#"><img src="pics/SearchIcon.png"></a>
						<ul class="sub1">
							<li><a href="advancedsearch.php">Advanced Search</a></li>
							<li id="searcha"><a href="simplesearch.php">Instant Search</a></li>
						</ul>	
					</li>
					<li id="sign_in"><a href=""> <?php 
					
						echo $_SESSION["sess_admin"];
					
					?> </a>
						<ul class="sub1">
							<li><a href="admin/adminpanel.php">Admin Profile</a></li>
							<li><a href="admin/adminlogouthandler.php">Log out</a></li>
						</ul>
						
					</li>
					
				</ul>
					
			</nav>
				
		</div>
		
	</body>
</html>