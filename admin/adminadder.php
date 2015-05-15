<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			ADD
		</title>
	</head>
	<body>
		<?php
		 include "adminpanel.php"; 
		?>
		<div id="contents">
			<form id="additem" method="post" action="adminadder.php" enctype="multipart/form-data">
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
				<tr><td><input type="submit" value="Add Item" name="addItem"></td></tr>
			</table> 
			</form>
		</div>
	</body>
</html>
<?php 
	
	if(isset($_POST['addItem'])){
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
			
			$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg"))


&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("categories/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "categories/" . $_FILES["file"]["name"]);
      
      echo "Stored in: " . "categories/" . $_FILES["file"]["name"];
      $imgpath = "/SixthSense/admin/categories/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
			
			
			
				$query = mysql_query("INSERT INTO games VALUES('','$console','$category','$imgpath','$vidpath','$link','$title','$name','$desc','$req','$size','$price','$quantity','$rating')");
						
				
		
	}
	
?>