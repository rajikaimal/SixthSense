<?php 
	session_start();
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['pword'];
		$sql = mysql_query("SELECT * FROM users WHERE email = '$email' AND password = '$password'" );
		$count = mysql_num_rows($sql);
	
		if($count == 1){
			$res = mysql_query("SELECT fname FROM users WHERE email = '$email' AND password = '$password' LIMIT 1");
			while($row = mysql_fetch_array($res)){
				
				$_SESSION["sess_user"] = $row['fname'];
			}
			header("location:home.php");
			exit();
		}
		else{
			echo "Info is incorrect try again !";
			
		}
	}
	
	

?>