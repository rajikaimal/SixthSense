<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Product Meter
			
		</title>
		
	</head>
	<body>
		<?php
		 include "adminpanel.php"; 
		?>
		<div id="contents">
			<form method="post" action="productmeter.php">
				<input type="submit" name="xbox360" value="XBOX 360" class="conX">
				<input type="submit" name="xboxone" value="XBOX one" class="conX">
				<input type="submit" name="ps4" value="PS4" class="conX">
				<input type="submit" name="ps3" value="PS3" class="conX">
				<input type="submit" name="pc" value="PC" class="conX">
			</form>
			<div id="conType">
				
			
			<?php 
				$console;
				if(isset($_POST['xboxone'])){
					$console = "xboxone";
					$con = "XBOX ONE";
					echo $con;
				}
				else if(isset($_POST['xbox360'])){
					$console = "xbox360";
					$con = "XBOX 360";
					echo $con;	
				}
				else if(isset($_POST['ps4'])){
					$console = "ps4";
					$con = "Playstation 4";
					echo $con;
				}
				else if(isset($_POST['ps3'])){
					$console = "ps3";
					$con = "Playstation 3";
					echo $con;
				}
				else if(isset($_POST['pc'])){
					$console = "pc";
					$con = "PC";
					echo $con;
				}
				else{
					echo "Select a console";
					exit();
				}
			
			echo "</div>";
				function meter($console,$category){
					
					$qnty;
					$res = mysql_query("SELECT * FROM games WHERE console='$console' AND category='$category'");
					while($row = mysql_fetch_array($res)){
						$qnty = $qnty + $row['quantity']; 
					}
					echo "<label style='vertical-align:top'>".$category."</label>";
					echo (($qnty/1000)*100)."%";
					if($qnty>750 && $qnty<=1000){ ?>
						<img src="Meter/greenmeter.png">		
						
			<?php	}
					if($qnty>500 && $qnty<=750){ ?>
						<img src="Meter/yellow.png">	
						
			<?php	}
					if($qnty>0 && $qnty<=500){ ?>
						<img src="Meter/redmeter.png">
			<?php	}
					if($qnty==0){ ?>
						<img src="Meter/zero.png">	
						
			<?php	}
					
					
				}
				
					$cat1 = "action"; 
					$cat2 = "shooting";
					$cat3 = "racing";
					$cat4 = "sports";
					$cat5 = "roleplaying";
					$cat6 = "family";
					echo "<label id='games' style='vertical-align:top'>GAMES</label><br/>";
					echo "<table>";
						meter($console,$cat1); 
						meter($console,$cat2);
						meter($console,$cat3);
						meter($console,$cat4);
						meter($console,$cat5);
						meter($console,$cat6);
					echo "</table>";
				function meterCon($console){
					
					$qnty;
					$res = mysql_query("SELECT * FROM console WHERE console='$console'");
					while($row = mysql_fetch_array($res)){
						$qnty = $qnty + $row['quantity']; 
					}
					echo (($qnty/1000)*100)."%";
					if($qnty>40 && $qnty<=50){ ?>
						<img src="Meter/greenmeter.png">			
						
			<?php	}
					if($qnty>30 && $qnty<=40){ ?>
						<img src="Meter/yellow.png">			
						
			<?php	}
					if($qnty>0 && $qnty<=30){ ?>
						<img src="Meter/redmeter.png">			
						
			<?php	}
					if($qnty==0){ ?>
						<img src="Meter/zero.png">			
						
			<?php	}
					if($console == "pc"){
						
					}
					else{
					
					}
				}
					echo "<label id='games' style='vertical-align:top'>CONSOLES</label><br/>";
					meterCon($console);
					
					echo "<br/>";
				function meterAcc($console){
					
					$qnty;
					$res = mysql_query("SELECT * FROM accessories WHERE console='$console'");
					while($row = mysql_fetch_array($res)){
						$qnty = $qnty + $row['quantity'];
					}
					echo (($qnty/1000)*100)."%";
					if($qnty>40 && $qnty<=50){ ?>
						<img src="Meter/greenmeter.png">			
						
			<?php	}
					if($qnty>30 && $qnty<=40){ ?>
						<img src="Meter/yellow.png">			
						
			<?php	}
					if($qnty>0 && $qnty<=30){ ?>
						<img src="Meter/redmeter.png">			
						
			<?php	}
					if($qnty==0){ ?>
						<img src="Meter/zero.png">			
						
			<?php	}
					if($console == "pc"){
						
					}
					else{
					
					}
				}
					echo "<label id='games' style='vertical-align:top'>ACCESSORIES</label><br/>";
					meterAcc($console);
				
				
							
			?>
		</div>
		
	
		
		
	</body>
	
</html>