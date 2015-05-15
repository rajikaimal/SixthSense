<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			EDIT
		</title>
	</head>
	<body>
		<?php
		 include "adminpanel.php"; 
		?>
		<div id="contents">
			<form id="additem" method="post" action="adminedit.php">
			<table>
				<tr><td>Console</td><td><select name="console">
					<option>xboxone</option>
					<option>xbox360</option>
					<option>ps4</option>
					<option>ps3</option>
					<option>pc</option>
				</select></td></tr>
				<tr><td>Category</td><td><select name="category">
					<option>action</option>
					<option>shooting</option>
					<option>roleplaying</option>
					<option>racing</option>
					<option>sports</option>
					<option>family</option>
				</select></td></tr>
				<tr><td>Upload Image</td><td><input type="file" name="file"></td></tr>
				<tr><td>Video Path</td><td><input type="text" name="vidpath"></td></tr>
				<tr><td>Link</td><td><input type="text" name="link"></td></tr>
				<tr><td>Name</td><td><input type="text" name="name"></td></tr>
				<tr><td>Title</td><td><input type="text" name="title"></td></tr>
				<tr><td>Description</td><td><textarea cols="50" rows="5" class="qu" name="desc" id="qu"></textarea></td></tr>
				<tr><td>Requirements</td><td><input type="text" name="req"></td></tr>
				<tr><td>Size</td><td><input type="text" name="size"></td></tr>
				<tr><td>Price</td><td><input type="text" name="price"></td></tr>
				<tr><td><input type="submit" value="Edit Item" name="editItem"></td></tr>
			</table> 
			</form>
		</div>
	</body>
</html>
<?php 
	if(isset($_POST['editItem'])){
		$console = $_POST['console'];	
		$category = $_POST['category'];
		$vidpath = $_POST['vidpath'];
		$link = $_POST['link'];
		$name = $_POST['name'];
		$title = $_POST['title'];	
		$desc = $_POST['desc'];
		$req = $_POST['req'];
		$size = $_POST['size'];
		$price = $_POST['price'];
		$quantity = 250;
		$rating = 1;
	
			$file = $_FILES['file'];
			$file_name = $file['name'];
			$file_type = $file['type'];
			$file_size = $file['size'];
			$file_path = $file['tmp_name'];
		
			if($file_name!="" && ($file_type="image/jpg" || $file_type="image/png") && $file_size<1048576)		
				echo "yay";
					
				if(move_uploaded_file($file_path,'categories/'.$file_name))
					
					$imgpath = 'categories/'.$file_name;
				
				echo "$imgpath";
				$query = mysql_query("UPDATE productdes SET description='$desc',description='$desc',requirements='$req',size='$size',price='$price' WHERE name='$name'");
				if($query == TRUE){
					echo "Uploaded successfully";
				}
				else{
					echo "failed";
				}		
				
		
	}
?>
