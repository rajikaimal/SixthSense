<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
		
		</title>
		<link rel="stylesheet" href="css/console.css" type="text/css">
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
		<?php 
			$consoleType = $_GET['console'];
			
				$op = mysql_query("SELECT * FROM console WHERE console='$consoleType'");
				while($row = mysql_fetch_array($op)){
					$main = $row['mainimg'];
					$sub1 = $row['subimg1'];
					$sub2 = $row['subimg2'];
					$price = $row['price'];
				}
			
			
			
		?>
		<div class="main">
			<img src="<?php echo $main?>">
		</div>
		<div class="subx">
			<label class="price">Choose Your Console <br/> <label class="price"> - Starting at $ <?php echo $price?> </label>
			<br/>
			
		</div>
		<div class="subx">
			<img src="<?php echo $sub1?>">
		</div>
		<div class="main">
			<img src="<?php echo $sub2?>">
		</div>	
	
	</body>
	<?php 
		include "footer.php";
	?>
</html>