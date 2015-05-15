<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HMTL>
<html>
	<head>
		<title>
			
			
		</title>
		
	</head>
	<body>
		<?php 
			include "profilesec.php";
		?>
		<div id="passwordChange">
			<form method="post" action="profilepword.php">
			<table>
				<tr><td>Current Password</td><td><input type="password" name="oldpword" class="changeR"></td></tr>
				<tr><td>New Password</td><td><input type="password" name="newpword" class="changeR"></td></tr>
				<tr><td>Confirm Password</td><td><input type="password" name="confirmpword" class="changeR"></td></tr>
			
				<tr><td><input type="submit" value="Change Password" name="submitChange" id="submitChange"></td></tr>
			<?php 
				$fnameo = $_SESSION['sess_user'];
				if(isset($_POST['submitChange'])){
					$old = $_POST['oldpword'];
					$new = $_POST['newpword'];
					$confirm = $_POST['confirmpword'];
					$oldie = mysql_query("SELECT * FROM users WHERE fname='$fnameo'");
					while($row = mysql_fetch_array($oldie)){
						$current = $row['password'];
						if($old != $current){ ?>
							<tr><td id="errormsg"> <?php echo "Current password is Incorrect"; ?> </td></tr>
				<?php	}
						if($new != $confirm){ ?>
							<tr><td id="errormsg"> <?php echo "Passwords Don't Match"; ?> </td></tr>
				<?php	
						}
						if($new == NULL){ ?>
							<tr><td id="errormsg"> <?php echo "Passwords Cannot be Empty"; ?> </td></tr>
				<?php	
							
						}
						else{
							$change = mysql_query("UPDATE users SET password='$confirm' WHERE fname = '$fnameo'");
							
						}
						
					}
				}
				
			?>
			
			</table>
		</div>
	</body>
</html>