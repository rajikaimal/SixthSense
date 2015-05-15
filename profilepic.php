<div id="profilePic">
	
		<label id="up">Update Profile Pic</label><br/>
				<div class="sub32">
				<form action="profilehis.php" enctype="multipart/form-data" method="post">
				<input type="file" name="file">
				<input type="submit" value="Upload" name="submit">
				</form>
				<?php 
				if(isset($_POST['submit'])){
					$file = $_FILES['file'];
					$file_name = $file['name'];
					$file_type = $file['type'];
					$file_size = $file['size'];
					$file_path = $file['tmp_name'];
					$fname = $_SESSION['sess_user'];
					if($file_name!="" && ($file_type="image/jpg" || $file_type="image/png") && $file_size<1048576)		
							
						if(move_uploaded_file($file_path,'Pics/'.$file_name))
							
							$imgpath = '/SixthSense/Pics/'.$file_name;
						
						$fname = $_SESSION['sess_user'];
						$ui = mysql_query("SELECT * FROM users WHERE fname='$fname'");
							while($rm = mysql_fetch_array($ui)){
						$email = $rm['email'];
					
					}
						$query = mysql_query("UPDATE users SET profilepic='$imgpath' WHERE email='$email'");
						if($query == TRUE){
							echo "Uploaded successfully";
						}
						else{
							echo "failed";
						}		
				}
				$fname=$_SESSION['sess_user'];
				$io = mysql_query("SELECT * FROM users WHERE fname='$fname'");
				while($row = mysql_fetch_array($io)){
					$email = $row['email'];
					
				}
				
				$qu = mysql_query("SELECT * FROM users WHERE email='$email'");
				while($row = mysql_fetch_array($qu)){
					$img = $row['profilepic']; 
				}
			?>
				<img src="<?php echo $img ?>" id="ProfilePic">
			<?php	
				
			?>	
			 	
				
			
			
</div>