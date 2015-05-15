<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>
		Advanced Search
	</title>
	<link rel="stylesheet" href="css/advancedsearch.css" type="text/css">
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
		<div id="Asearch"> Advanced Search </div>
		<div id="Aoptions">
			<form action="advancedsearch.php" method="post">
			
			<div id="Aconsole">
				<label id="conLabel">Select a console</label>
				<ul>
				<li><input type="checkbox" name="Axbox360">XBOX 360</li>
				<li><input type="checkbox" name="Axboxone">XBOX one</li>
				<li><input type="checkbox" name="Aps4">PS 4</li>
				<li><input type="checkbox" name="Aps3">PS 3</li>
				<li><input type="checkbox" name="Apc">PC</li>
				</ul>
			</div>
			<div id="Acat">
				<label id="catLabel">Select a category</label>
				<ul>
				<li><input type="checkbox" name="Aaction">Action</li>
				<li><input type="checkbox" name="Ashooting">Shooting</li>
				<li><input type="checkbox" name="Aroleplaying">Roleplaying</li>
				<li><input type="checkbox" name="Aracing">Racing</li>
				<li><input type="checkbox" name="Asports">Sports</li>
				<li><input type="checkbox" name="Afamily">Familty</li>
				</ul>
				
			</div>
			<input type="submit" name="ADsearch" id="ADsearch" value="Search">
			</form>
		</div>
		<div id="results">
			<?php 
				if(isset($_POST['ADsearch'])){
					if(isset($_POST['Axboxone'])){
						$cats = 'xboxone';
					}	
					if(isset($_POST['Axbox360'])){
						$cats = 'xbox360';
					}	
					if(isset($_POST['Aps3'])){
						$cats = 'ps3';
					}	
					if(isset($_POST['Aps4'])){
						$cats = 'ps4';
					}	
					if(isset($_POST['Apc'])){
						$cats = 'pc';
					}
						
					/****** category ********/
					if(isset($_POST['Aaction'])){
						$cats1 = 'action';
					}	
					if(isset($_POST['Ashooting'])){
						$cats1 = 'shooting';
					}	
					if(isset($_POST['Aroleplaying'])){
						$cats1 = 'roleplaying';
					}	
					if(isset($_POST['Aracing'])){
						$cats1 = 'racing';
					}	
					if(isset($_POST['Asports'])){
						$cats1 = 'sports';
					}	
					if(isset($_POST['Afamily'])){
						$cats1 = 'family';
					}	
					
					function searchFany($cats,$cats1){
						$sr = mysql_query("SELECT * FROM games WHERE console='$cats' and category='$cats1'");
						while($row = mysql_fetch_array($sr)){ ?>
							
							<a href="<?php echo $row['link'] ?>"><img src="<?php 
													
												echo $row['imgpath'];?>"></a>
							
				<?php	}
							
					}
					
					function searchFany1($cats){
						$sr = mysql_query("SELECT * FROM games WHERE console='$cats'");
						while($row = mysql_fetch_array($sr)){ ?>
							
							<a href="<?php echo $row['link'] ?>"><img src="<?php 
													
												echo $row['imgpath'];?>"></a>
							
				<?php	}
							
					}
					if(empty($cats1)){
						searchFany1($cats);
					}
					else{
						searchFany($cats,$cats1);
					}
			}
			?>
		</div>
	</body>
	<?php 
		include "footer.php";
	?>
</html>