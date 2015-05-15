<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Cart | Sixth Sense
		</title>
		<link rel="stylesheet" href="css/cart.css" type="text/css">
		
		<script>
			function refreshPage(){
			    window.location.assign('cart.php');
			} 
		</script>
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
				header("location:login.php");
			}
			?>
		
		<div id="contents">
			<label id="your_cart">Your Shopping cart </label>
			<div id="items">
				
				<div id="addeditems">
				
			<?php 
			session_start();
			if(isset($_SESSION["sess_user"])){
				$fname = $_SESSION["sess_user"];
				$ro = mysql_query("SELECT * FROM users WHERE fname='$fname'");
				while($ro2 = mysql_fetch_array($ro)){ 
					
					$email = $ro2['email'];
				}
				$current = 0;
				$res = mysql_query("SELECT * FROM cart WHERE email='$email'");
				if(mysql_num_rows($res) == 0){
					echo "Oopsss Your cart is empty";
				}
				while($row3 = mysql_fetch_array($res)){
					$name = $row3['pname'];
					$category = $row3['category'];
					$pname = $row3['pname'];
					$pid = $row3['pid'];
					$rr= mysql_query("SELECT * FROM games WHERE name='$name' AND category='$category'"); 
				
					while($req = mysql_fetch_array($rr)){ ?>
							<div class="cartItems">
							<img src="<?php echo $req['imgpath']; ?>">
						
								<div class="product_name">
									<label class="productName"><?php echo $req['name']?></label>
								</div>	
								<div class="price" align="right">
									<form action="payment.php?type=game" method="post"> 
									<label id="cartPrice"><?php echo "Price : $".$req['price'] ?></label><br/>
									<input type="hidden" name="name" value="<?php echo $name ?>">
									<input type="hidden" name="image" value="<?php echo $req['imgpath']; ?>">
									<input type="hidden" name="email" value="<?php echo $email ?>">
									<input type="hidden" name="category" value="<?php echo $category ?>">
									<input type="hidden" name="price" value="<?php echo $req['price']; ?>">
									<input type="submit" id="purchase" value="Direct Purchase">
									</form>
									<form action="https://www.paypal.com/cgi-bin/webscr" method="post">

										<!-- Identify your business so that you can collect the payments. -->
										<input type="hidden" name="business" value="SixthSense@gmail.com">
										
										<!-- Specify a Buy Now button. -->
										<input type="hidden" name="cmd" value="_xclick">
										
										<!-- Specify details about the item that buyers will purchase. -->
										<input type="hidden" name="item_name" value="<?php echo $req['name']?>">
										<input type="hidden" name="amount" value="<?php echo $req['price']?>">
										<input type="hidden" name="currency_code" value="USD">
										
										<!-- Display the payment button. -->
										<input type="image" name="submit" border="0"
										src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
										alt="PayPal - The safer, easier way to pay online">
										<img alt="" border="0" width="1" height="1"
										src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

									</form>
									
									<form method="post" action="cart.php">
										<input type="hidden" name="removal" value="<?php echo $pid ?>">
										<input type="submit" name="removeCart" value="Remove" onclick="refreshPage();" id="removeID">
										
									</form>
			
									<?php 
									if(isset($_POST['removeCart'])){
										$pid = $_POST['removal'];
										mysql_query("DELETE FROM cart WHERE email='$email' AND pid='$pid' AND category='$category'");
										
									}
									?>
									
								</div>
							</div>
						
			<?php	$current = $current+$req['price'];	
				}

							
			 	} ?>
			 
			 	<div class="cartItems">
			 					<?php if(mysql_num_rows($res) == 0){
								
								
								}
								else{ ?>
									Total : <?php echo "$".$current; 
								
								}
								?>
								
				</div> 
		<?php } 	
			
		?> </div>
			</div>
		</div>
	</body>
	<?php 
		include "footer.php";
	
	?>
</html>