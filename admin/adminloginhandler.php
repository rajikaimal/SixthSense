<?php 
	function login_handler(){
		session_start();
		if(isset($_POST['adminlogin'])){
			$username = $_POST['adminuname'];
			$password = $_POST['adminpword'];
			$sql = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' LIMIT 1" );
			$count = mysql_num_rows($sql);
		
			if($count == 1){
				$_SESSION["sess_admin"] = $username;
				header("location:adminpanel.php");
				exit();
			}
			else{
				echo "Info is incorrect try again";
				exit();
			}
		}
		
	}

?>