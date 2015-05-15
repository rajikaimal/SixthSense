<?php 
	include "faq.php";
?>
	<label id="header"> Questions asked by users </label>
	<div id="questions">
		
		<?php 
		$username = array();
		$question = array();
		$a = 0;
		$res = mysql_query("SELECT * FROM faqq");
			while($row = mysql_fetch_array($res)){
				$username[$a] = $row['user'];
				$question[$a] = $row['question'];
				$a++;
			}
			$a = 0;
			while(!empty($username[$a])){
				echo "<div id='que21'>".$username[$a]."<br/>"."Q : ".$question[$a]."</div><br/>";
				echo "ANSWER <textarea cols='100' rows='5' class='qu' name='question' id='qu'></textarea>"."<br/>";
				echo "<input type='submit' name='submitAnswer' id='answerMe'>"."<br/>";
				$a++;
			}
		?>
	</div>
<?php 
	include "footer.php";
?>	