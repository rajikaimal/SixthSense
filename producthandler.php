<?php	 
		function products($category){
			$console = $_GET['console'];
			$res = mysql_query("SELECT * FROM games WHERE console='$console' AND category='$category' LIMIT 6");
	
				
				while($row = mysql_fetch_array($res)){
					
						
				?>	
					<a href="<?php echo $row['link'] ?>"><img src="<?php 
												
											echo $row['imgpath'];?>"></a>
						
					<?php }
			}
?>
