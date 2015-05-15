<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Sixth Sense
		</title>
		<link rel="stylesheet" href="css/detailtemplate.css" type="text/css">
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
					
						<?php 
							include "detailhandler.php";
							$console = $_GET['console'];
							$title = $_GET['title'];
							detailer($console,$title);
						?>  
									
				</div>
		<div id="recdesc">
			Recommended for you
		</div>
		<div id="aj">
		
		
		</div>
		<?php 
			$jets = mysql_query("SELECT * FROM games ORDER BY RAND() LIMIT 4");
			while($row = mysql_fetch_array($jets)){ ?>
				<div id="aj">
						<a href="<?php echo $row['link']; ?>"><img class='aj2' src="<?php echo $row['imgpath'];?>"/></a>
				</div>
		<?php	}
		?>
		

		<div id="footer_2">
			<?php 
				include "footer.php";
			?>
		</div>
	</body>
	
</html>