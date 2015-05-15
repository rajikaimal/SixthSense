<!DOCTYPE HTML>
<html>
	<head>
		<title>
			REMOVE ADMIN
		</title>
	</head>
	<body>
		<?php 
			include "adminpanel.php";
		?>
		<div id="contents">
			<form action="removeadmin.php" method="post">
			<table>
				
				
			
			<?php 
			
				$nm = array();
				$a = 0; 
					$category = $_POST['category'];
	
					$query = mysql_query("SELECT * FROM admin");
					
					while($row = mysql_fetch_array($query)){
						 $nm[$a]=$row['id'];
				?>	
				<tr><td><input type="checkbox" name="removal" value="<?php echo $row['id']?>"><?php echo $row['username'];?></td></tr>
							
				<?php 
					$a++;
					}
					?>
				<tr><td>	<input type="submit" value="Delete Admin" name="adminDel"> </td></tr>
			</form>
			<?php		
					if(isset($_POST['adminDel'])){
						if(isset($_POST['removal'])){
							
							$aa = $_POST['removal'];
							echo "hahaha";
							echo $aa;
							mysql_query("DELETE FROM admin WHERE id='$aa'");
						
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