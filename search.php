<?php 
	include "dbConnect.php";
	$resu = mysql_query("SELECT * FROM games WHERE name LIKE ('m%')");
	while($row = mysql_fetch_array($resu)){
		echo "<tr><td>".$row['name']."</td></tr>";
		
	}
?>