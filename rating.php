<?php 
	include "dbConnect.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="css/rating.css" type="text/css">
		
	</head>
<body>
	<div id="starCon">
	<ul id="mainStar">
		<form method="post">
			<input type="image" src="pics/star.png" id="ratingBut" value="1" name="yay">
			<input type="image" src="pics/star.png" id="ratingBut" value="2" name="yay">
			<input type="image" src="pics/star.png" id="ratingBut" value="3" name="yay">
			<input type="image" src="pics/star.png" id="ratingBut" value="4" name="yay">
			<input type="image" src="pics/star.png" id="ratingBut" value="5" name="yay">
		</form>
	</ul>
	</div>

		<?php 
			
			
			if(isset($_POST['yay'])){
				$rae = $_POST['yay'];
				$yu = mysql_query("SELECT * FROM games WHERE id='$gameId'");
				while($row = mysql_fetch_array($yu)){
					$rateNo = $row['rateno'];
					$current = $row['rating'];
				}
				$rateNo;
				echo $rateNo;
				if(mysql_query("UPDATE games SET rateno='$rateNo' WHERE id='$gameId'")){
					$current = ($current *($rateNo)+$rae) /($rateNo+1);
				}
				mysql_query("UPDATE games SET rating='$current' WHERE id='$gameId'");			
			}
	?>
</body>
</html>