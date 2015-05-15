<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			REMOVE ITEM
		</title>
	</head>
	<body>
		<?php 
			include "adminpanel.php";
		?>
		<div id="contents">
			<form action="admindel.php" method="post">
			<table>
				<tr><td>Console</td><td><select name="console">
											<option>xbox360</option>
											<option>xboxone</option>
											<option>PS 4</option>
											<option>PS 3</option>
											<option>PC</option>
										</select></td></tr>
				<tr><td>Category</td><td>
										<select name="category">
											<option>action</option>
											<option>Shooting</option>
											<option>Roleplaying</option>
											<option>Sports</option>
											<option>Family</option>
										</select></td></tr>
				<tr><td><input type="submit" value="Search" name="search"></td></tr>						
			</table>
			</form>
			<table>
				<form action="admindel.php" method="post">
				<?php 
				$nm = array();
				$a = 0; 
					if(isset($_POST['search'])){
						$console = $_POST['console'];
						$category = $_POST['category'];
						
						
						$query = mysql_query("SELECT * FROM games WHERE console = '$console' AND category = '$category'");
						
						while($row = mysql_fetch_array($query)){ $nm[$a]=$row['id']; ?>
								
								<tr><td><input type="checkbox" name="removal" value="<?php echo $row['id'] ?>"><?php echo $row['name']; echo $nm[$a]; ?></td></tr>
								
				<?php 	
						$a++;
						} 
							
						?>
				<tr><td><input type="submit" name="delete21" value="Delete"></td></tr>		 
							
				</form>
				<?php								
					}
				
			
					if(isset($_POST['delete21'])){
						if(isset($_POST['removal'])){
							
							$aa = $_POST['removal'];
							echo "hahaha";
				
							mysql_query("DELETE FROM games WHERE id='$aa'");
						
						}
						else{		
						
						echo "fany fany";
						}
					}
				?>
			</table>
		</div>
		
	</body>
</html>