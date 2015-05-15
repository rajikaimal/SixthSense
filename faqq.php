<?php 
	include "faq.php";
?>
	
	<div id="questions">
				<form method="post" action="faqq.php">
				<label class="que">Ask a Question </label>
				<br/><br/>
				<textarea cols="100" rows="10" class="qu" name="question" id="qu"></textarea>
				<input type="submit" value="Ask" name="ask" id="askButton">
				</form>
			</div>
	<?php 
		if(isset($_POST['ask'])){
			$user = $_SESSION['sess_user'];
			$question = $_POST['question'];
			mysql_query("INSERT INTO faqq VALUES ('','$user','$question')");
			echo "<script>alert('Successfully posted') </script>";
			header("location:faq.php");
		}
	
	?>			
<?php 
			
			include "footer.php";
?>