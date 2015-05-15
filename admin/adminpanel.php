<?php
	session_start();
	if(!isset($_SESSION["sess_admin"])){
		header("location:adminlogin.php");
	}
?>
<?php 
	include "dbConnect.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Dashboard
		</title>
		<link rel="stylesheet" href="adminpanel.css" type="text/css">
	</head>
	<body>
		<div id="container">
		<div id="sidepanel">
			<div id="header">
				<h2>Dashboard</h2>
			</div>
			<div id="admin_name">
				Welcome Admin <?php echo $_SESSION["sess_admin"]; ?>	
			</div>
			<div id="options">
				<ul id="op">
					<li><a href="../home.php">View Site</a></li>
					<li><a href="productmeter.php">Product meter</a></li>
					<li><a href="adminadder.php">Add Item</a></li>
					<li><a href="adminedit.php">Edit Item</a></li>
					<li><a href="admindel.php">Remove Item</a></li>
					<?php 
						$user = $_SESSION['sess_admin'];
						$query = mysql_query("SELECT * FROM admin WHERE username = '$user'");
						while($row = mysql_fetch_array($query)){
								
						?>		
							<?php 
								if($row['level']=='1'){ 
								echo '<li><a href="removeadmin.php">Remove Admin</a></li>';
						
								}
							?>	
				<?php	} ?>	
					
				</ul>
			</div>	
			<label id="adminaccount">Admin Account</label>
			<div id="admincontrols">
				<ul>
					<li><a href="adminaccount.php">Change Password</a></li>
					<li><a href="adminlogouthandler.php">Log out</a></li>
				</ul>
			</div>
		</div>
		
		</div>
	</body>
	

</html>