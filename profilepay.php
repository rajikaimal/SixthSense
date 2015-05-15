<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTMl>
<html>
	<head>
		<title>
			<?php 
				session_start();
				echo $_SESSION['sess_user']." | Sixth Sense";
			?>
		</title>
		<link rel="stylesheet" href="css/profilehis.css" type="text/css">
	</head>
	<body>
		<div id="n1">
		<?php 
			include "profile.php";
		?>
		</div>
		<div>
			<?php 
				include "profilepic.php";
			?>
				
				<div class="sub32">
				
				<div>
					<?php
						session_start();
						$fname = $_SESSION['sess_user'];
						
						$rt = mysql_query("SELECT * FROM users WHERE fname='$fname'");
						while($rop = mysql_fetch_array($rt)){
								$email = $rop['email'];
							
						}
					
						$rt1 = mysql_query("SELECT * FROM history WHERE email='$email'");
						echo "<table id='history321'>";
						echo "<th>Product Name</th><th>Price</th>";
						while($rop1 = mysql_fetch_array($rt1)){
							$name  = $rop1['pname'];
							$price = $rop1['price'];
							?>
							
							<tr><td><?php echo $name ?></td><td><?php  echo $price ?></td><tr/>
				<?php		}
						echo "</table";	
						
						
					?>				
				</div>
				
				</div>
				
			</div>
		</div>
	</body>
</html>