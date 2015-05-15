<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HMTL>
<html>
	<head>
		<title>
		<?php 
				session_start();
				echo $_SESSION['sess_user']." | Sixth Sense";
		?>
			
		</title>
		
	</head>
	<body>
		<?php 
			include "profilesec.php";
		?>
		<div id="passwordChange">
			<form method="post" action="profilephn.php">
			<table>
				<tr><td>Current Phone Number</td><td><input type="text" name="oldphone" class="changeR"></td></tr>
				<tr><td>New Phone Number</td><td><input type="text" name="newphone" class="changeR"></td></tr>
				<tr><td>Confirm Phone Number</td><td><input type="text" name="confirmphone" class="changeR"></td></tr>
			
				<tr><td><input type="submit" value="Change" name="submitChange" id="submitChange"></td></tr>
			<?php 
				$fnameo = $_SESSION['sess_user'];
				if(isset($_POST['submitChange'])){
					$old = $_POST['oldphone'];
					$new = $_POST['newphone'];
					$confirm = $_POST['confirmphone'];
					$oldie = mysql_query("SELECT * FROM users WHERE fname='$fnameo'");
					while($row = mysql_fetch_array($oldie)){
						$current = $row['phone'];
						if($old != $current){ ?>
							<tr><td id="errormsg"> <?php echo "Current Phone Number is Incorrect"; ?> </td></tr>
				<?php	}
						if($new != $confirm){ ?>
							<tr><td id="errormsg"> <?php echo "Phone Numbers Don't Match"; ?> </td></tr>
				<?php	
						}
						if($new == NULL){ ?>
							<tr><td id="errormsg"> <?php echo "Phone Number Cannot be Empty"; ?> </td></tr>
				<?php	
							
						}
						else{
							$change = mysql_query("UPDATE users SET phone='$confirm' WHERE fname = '$fnameo'");
							
						}
						
					}
				}
				
			?>
			
			</table>
		</div>
	</body>
</html>