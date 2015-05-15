<?php 
	include "dbConnect.php";
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<tile>
			
		</title>
		<link rel="stylesheet" href="css/accessories.css" type="text/css">
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
			$accType = $_GET['acc'];
			if($accType == 'xboxone'){
				$accessory = "XBOX ONE";
				
			}
			if($accType == 'xbox360'){
				$accessory = "XBOX 360";
				
			}
			if($accType == 'ps4'){
				$accessory = "Playstation 4";
				
			}
			if($accType == 'ps3'){
				$accessory = "Playstation 3";
				
			}
			if($accType == 'pc'){
				$accessory = "PC";
				
			}
		?>
		<label class="title"> <?php echo $accessory ?> </label>
		<div id="contents">
			<div class="main">
				<img src="pics/xboxone/acc/main.jpg">
			</div>		
		<?php 
			$fname = $_SESSION['sess_user'];
			$qwaq = mysql_query("SELECT * FROM users WHERE fname='$fname'");
			while($row = mysql_fetch_array($qwaq)){
				$email = $row['email'];
			}
			$pp = mysql_query("SELECT * FROM accessories WHERE console='$accType'");
			while($row = mysql_fetch_array($pp)){ ?>
				<div class="subx">
					<img src=<?php echo $row['image']; ?>>
				
					
					<form method="post" action="payment.php?type=acc">
						<input type="hidden" name="image" value="<?php echo $email ?>">
						<input type="hidden" name="image" value="<?php echo $row['image']; ?>">
						<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
						<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
						<label id="name">	<?php echo $row['name']?> </label>
						<label id="price">	<?php echo "$ ".$row['price']?> <input type="submit" id="payAcc" value="BUY NOW"></label>
						
												
					</form>
				</div>
			
			<?php
				
			}
		?>
		
		</div>
		</body>
</html>