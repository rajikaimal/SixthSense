<?php 
		
		function detailer($console,$title){
		$res = mysql_query("SELECT * FROM games WHERE console='$console' AND title='$title'");
			
			
			while($row = mysql_fetch_array($res)){
					
			?>	
	
				<div id="description">
				<label id="title">
					<?php 	echo $row['name']; ?>
				</label>
					<div id="desc">
					<?php 
						echo $row['description'];
				
					?>	
					
					</div>
					<?php 
						if($row['requirements'] != ""){
							echo "Requirements: " .$row['requirements'];
						}
					?>
					
					<div id="size"> Size:<?php echo $row['size']?>  <br/></div>
					<div id="price">Price:<?php echo $row['price']?> <br/></div>					
					<br/>
					
					<?php include "rating.php" ?>
					<div id="size">Rating : <?php echo $row['rating']."/5" ?></div>
					<br/>
					
					
					<input type="button" value="Add to Cart" id="addCart" onclick="<?php 
					session_start();
					$fname = $_SESSION["sess_user"];
					if(isset($_SESSION["sess_user"])){
						
						
						$re = mysql_query("SELECT * FROM games WHERE title='$title'");
						while($row1 = mysql_fetch_array($re)){
							$id = $row1['id'];
							$name = $row1['name'];
							$price = $row1['price'];		
							$category = $row1['category'];
						}
						$re1 = mysql_query("SELECT * FROM users WHERE fname='$fname'");
						while($row2 = mysql_fetch_array($re1)){
							$email = $row2['email'];
						}
						mysql_query("INSERT INTO cart VALUES ('$id','$name','$category','$email','$price')");
					}
						
					?>">
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
					
				</div>	
					<div id="trailer">
						<video width="100%" height="100%" loop autoplay="autoplay">
							
							<source src="<?php echo $row['vidpath']?>">			
						</video>
					</div>
		<?php } ?> 
				
		<?php }
		
?>