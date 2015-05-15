<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			
		</title>
		<link rel="stylesheet" href="css/allproducts.css" type="text/css">
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
		
		<div id="container">
		<div>
			<?php	 
			$category = $_GET['category'];
			$console = $_GET['console'];
			function allproducts($category,$console){
				$console = $_GET['console'];
				$res = mysql_query("SELECT * FROM games WHERE console='$console' AND category='$category' LIMIT 6");
		
					
					while($row = mysql_fetch_array($res)){
						
							
					?>	
						<a href="<?php echo $row['link'] ?>"><img src="<?php 
													
												echo $row['imgpath'];?>"></a>
						
					<?php }
			}
			
			allproducts($category, $console);
			?>
			
			
			<a href="#"><img src="xboxone/image (1).png"></a>
			<a href="#"><img src="xboxone/image (2).png"></a>
			
		</div>
		<div>
			<a href="#"><img src="xboxone/shooter/0b0c5bcb-153a-4b1b-b29a-cd75fd752426.jpg"></a>
			<a href="#"><img src="xboxone/shooter/d2c96dcb-8106-4ef3-965e-ea9e10aeb4da.jpg"></a>
			<a href="#"><img src="xboxone/shooter/d84f20ab-0070-4e42-b882-027906a7be16.jpg"></a>
			<a href="#"><img src="xboxone/shooter/image (1).png"></a>
			<a href="#"><img src="xboxone/shooter/image (2).png"></a>
		
		</div>
		<div>
			<a href="#"><img src="xboxone/roleplaying/5f0e6bc1-e010-48ff-b796-77eac8f8a35d.jpg"></a>
			<a href="#"><img src="xboxone/roleplaying/ada9f617-38b4-49d2-bc50-847fb0512e3f.jpg"></a>
			<a href="#"><img src="xboxone/roleplaying/c4ccb4f7-81af-4ee7-8c15-c294e1618995.jpg"></a>
			<a href="#"><img src="xboxone/roleplaying/c93cda95-6870-42c4-9451-ed82ae864263 (1).jpg"></a>
			<a href="#"><img src="xboxone/roleplaying/image (3).png"></a>
	
		</div>
		<div>
			<a href="#"><img src="xboxone/Racing and Flying/4449da4a-601f-4f9d-801a-412e0aa96f4e.jpg"></a>
			<a href="#"><img src="xboxone/Racing and Flying/image (1).png"></a>
			<a href="#"><img src="xboxone/Racing and Flying/image.png"></a>
			<a href="#"><img src="xboxone/Racing and Flying/image (3).png"></a>
			<a href="#"><img src="xboxone/Racing and Flying/image (4).png"></a>
		
		</div>
		<div>
			<a href="#"><img src="xboxone/Sports/d8a39c1b-3f1a-4db2-a3a9-af89348ee21d.jpg"></a>
			<a href="#"><img src="xboxone/Sports/image (1).png"></a>
			<a href="#"><img src="xboxone/Sports/image (2).png"></a>
			<a href="#"><img src="xboxone/Sports/image (3).png"></a>
			<a href="#"><img src="xboxone/Sports/image (4).png"></a>
		
		</div> 
		<div>
			<a href="#"><img src="xboxone/Family/image (1).png"></a>
			<a href="#"><img src="xboxone/Family/image (2).png"></a>
			<a href="#"><img src="xboxone/Family/image (3).png"></a>
			<a href="#"><img src="xboxone/Family/image (4).png"></a>
			<a href="#"><img src="xboxone/Family/image (6).png"></a>
		
		</div>
		</div>
		<div id="footer2">
			<?php 
				include "footer.php";
			?>
		</div>
	</body>
</html>