<?php 
	
	include "dbConnect.php";
	$nm1 = $_GET['nm'];
	if($nm1 == ""){
		
	}
	else{
	$res = mysql_query("SELECT * FROM games WHERE name LIKE ('$nm1%')");
	echo "<table>";
	while($row = mysql_fetch_array($res)){ ?> 
		<a href="<?php echo $row['link']?>"><img src="<?php echo $row['imgpath'] ?>"></a> 
		
	<?php	}
	echo "</table>";
	}
?>