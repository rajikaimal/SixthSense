<!DOCTYPE HTML>
<html>
	<head>
		
	</head>
	<body>
		<?php	 
		include "dbConnect.php";
		$res = mysql_query("SELECT * FROM products");
		
		while($row = mysql_fetch_array($res)){
			if($_GET['category'] == "xboxone"){
		?>	
			<img src="<?php echo $row['path'];?>">
				
			<?php }
		}	 
		?>
	</body>
	
</html>