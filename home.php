
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			HOME	
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
			else if(isset($_SESSION["sess_admin"])){
				include "adminnavigation.php";
			}
			else{
				include "navigation.php";	
			}
			?>
		
		<div id="vid" style="opacity: 1">
		<video id="backvid" width="100%" height="100%" loop autoplay>
			<source src="SSS_trailer.mp4" type="video/mp4">
		</video>
		
		
		</div>		

		<div id="Spotlight">Spotlight</div>
		<div id="spot">
			<div id="sub_1">
				<a href="#"><img src="pics/spo1.jpg"></a>
				
			</div>
			<div id="sub_2">
				<div id="sub_2_1">
					<a href="#"><img src="pics/home1.jpg"></a>
				</div>
				<div id="sub_2_2">
					<a href="#"><img src="pics/home2.jpg"></a>
				</div>
				<div id="sub_2_3">
					<a href="#"><img src="pics/hom3.jpg"></a>
				</div>
				<div id="sub_2_4">
					<a href="#"><img src="pics/home4.jpg"></a>
				</div>
			</div>	
			
		</div>
		<div id="be_amazed">
			<label id="amazed">A whole new Dimension. </label>
			<br/>
			Welcome to a new generation of games and entertainment. 
			Where games push the boundaries of realism <br/> 
			obeys your every command a game is a snap. And you can jump from TV to movies to music to <br/>
			a game in an instant. Where your experience is custom tailored to you. <br/> 
			And the entertainment you love is all in one place. Welcome to the all-in-one, Sixth Sense.	
		</div>
		<div id="accessories">Accessories</div>	
		<div id="accessoriesbeta">
			<div id="accvid1">
				<video class="accvid" controls>
					<source src="Assassin's Creed Unity E3 2014 World Premiere Cinematic Trailer [SCAN].mp4" type="video/mp4">
				</video>
			</div>
			<div id="accvid2">
				<video class="accvid" controls>
					<source src="trailers/Battlefield 4 - E3 2013 Official Trailer.mp4" type="video/mp4">
				</video>
			</div>
			<div id="accvid3">
				<video class="accvid" controls>
					<source src="trailers/Dead Rising 3 PC E3 Trailer PEGI.mp4" type="video/mp4">
				</video>
			</div>
			<div id="accvid4">
				<video class="accvid" controls>
					<source src="trailers/Fable Legends Official Trailer.mp4" type="video/mp4">
				</video>
			</div>
			<div id="accvid5">
				<video class="accvid" controls>
					<source src="trailers/Forza Motorsport 5 Launch Trailer.mp4" type="video/mp4">
				</video>
			</div>
			<div id="accvid6">
				<video class="accvid" controls>
				
				</video>
			</div>
		</div>
		<div id="info">
			
			<img src="pics/Untitled.png">
			<img src="pics/Untitled1.png">
		
		</div>

		<?php 
			include "footer.php"
		?>
	</body>
</html>
