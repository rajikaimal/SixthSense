<!DOCTYPE HTML>
<html>
	<head>
		<title>
			
		</title>
	</head>
	<body>
		<?php 
			include "adminpanel.php";
		?>
		<div id="contents">
			
			<table>		

			<?php 
				if(isset($_SESSION['sess_admin'])){
					$admin = $_SESSION['sess_admin'];
										
					$query = mysql_query("SELECT * FROM admin WHERE username = '$admin'");
					
					while($row = mysql_fetch_array($query)){
				
			?>	
				<tr><td><?php echo "Admin Username :"?></td><td><?php echo $row['username'];?></td></tr>
				<form action="adminaccount.php" method="post">
				<tr><td><?php echo "New Password :"?></td><td><input type="password" name="newpword"></td></tr>
				<tr><td><?php echo "Confirm Password :"?></td><td><input type="password" name="confirmnewpword"></td></tr>
				<tr><td><input type="submit" value="Change Password" name="pwordchange"></td></tr>
				<?php 
					if(isset($_POST['pwordchange'])){
						$pword = $_POST['newpword'];
						$confirmpword = $_POST['confirmnewpword'];
						if($pword != $confirmpword){ ?>
							<tr><td><?php echo "Passwords dont match"; ?></td></tr>
					<?php	} 
					
						if($pword == $confirmpword){
							$admin = $_SESSION['sess_admin'];
							$query1 = mysql_query("UPDATE admin SET password='$pword' WHERE username = '$admin'");
							?>
							<tr><td><?php echo "Password changed"; ?> </td></tr>
							
					<?php	
						} 
					}
				
				?>
				</form>
				<?php 
					}
				}
				?>
				
				</table>
				
		</div>
				
	</body>
</html>orm>
				<?php 
					}
				}
				?>
				
				</table>
				
		</div>
				
	</body>
</html>