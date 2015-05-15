<!DOCTYPE HTML>
<html>
	<head>
		<title>
			CONTACT US
		</title>
		<link rel="stylesheet" href="css/home.css" type="text/css">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
	</head>
	<body>
<?php
			session_start();
			if(isset($_SESSION["sess_user"])){
				include "usernavigation.php";
			}
			else{
				include "navigation.php";	
			}
			?>


<div id="be_amazed">
			<label id="amazed">Contact Us </label>
			<br/>

<br>If you have a question or quibble about your order, your account, or any of our services, we should have the answer for you within our help pages. But if you can't find the answer you're looking for, our Customer Service team are happy to help you.<br>

<br>You can drop us a line via email. We've also got some handy information lines you can call to find out the latest about our stores and products.
<br>
<br>
<b>SIXTH SENSE E-mail CONTACT - sixthsense8@gmail.com</br>
<br>SIXTH SENSE Phone CONTACT - 011-2624624
</div>


		<?php 
			include "footer.php"
		?>
</body>

</html>
