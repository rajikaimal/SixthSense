<?php 

	include "dbConnect.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
		
			input[type=radio]{
    							display:none; 
    							margin:10px;
								}
 
/*
  Change the look'n'feel of labels (which are adjacent to radiobuttons).
  Add some margin, padding to label
*/
input+label{
    
    		margin:2px;
    		padding-left:35px ;
    		padding-bottom:8px;
    
    		background-image:url(VisaMastercard.jpg);
}
/*
 Change background color for label next to checked radio button
 to make it look like highlighted button
*/
input:checked + label { 
    					opacity: 0.5; 
						}
		</style>
		<script>
			function shopForm(form)
			{//card no
				if(form.card.value=="")
				{
					alert("Error: Card number cannot be blank!");     
      				return false;
      			}
      			re=/[0-9]/;
      			if(!re.test(form.card.value))
      			{
      				alert("Error: Card number sholud be numeric!");     
      				return false;
      			}
				if (form.card.value.length<16 ||form.card.value.length>16)
				{
					alert("Error: Invalid card number!");     
      				return false;
				}
				//expiration month
				if(form.mm.value=="")
				{
					alert("Error: month cannot be blank!");     
      				return false;
      			}
      			
      			re=/[0-9]/;
      			if(!re.test(form.mm.value))
      			{
      				alert("Error: month sholud be numeric!");     
      				return false;
      			}
      			if(form.mm.value>12)
      			{
      				alert("Error: month sholud be between 0-12!");     
      				return false;
      			}
      			//year
      			if(form.yy.value=="")
				{
					alert("Error: Year cannot be blank!");     
      				return false;
      			}
      			re=/[0-9]/;
      			if(!re.test(form.yy.value))
      			{
      				alert("Error: Year sholud be numeric!");     
      				return false;
      			}
      			if(form.yy.value.length>4 || form.yy.value.length<4 ||form.yy.value<2015||form.yy.value>2030)
      			{
      				alert("Error:  Invalid year!");     
      				return false;
      			}
      			//csc
      			if(form.csc.value=="")
      			{
      				alert("Error: CSC cannot be blank!");     
      				return false;
      			}
      			if(form.csc.value.length>3 || form.csc.value.length<3)
      			{
      				alert("Error:  Invalid CSC!");     
      				return false;
      			}
      			re=/[0-9]/;
      			if(!re.test(form.csc.value))
      			{
      				alert("Error: CSC sholud be numeric!");     
      				return false;
      			}
      			
			}
		</script>
		<link rel="stylesheet" href="css/payment.css" type="text/css">
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
			}
			?>
		<div id="products">
			<?php 
				$name = $_POST['name'];
				echo "<label id='productName'>".$name."</label><br/>";
				$img = $_POST['image'];
				
				
			?>
			<img src="<?php echo $img?>" id="productImg">
			
		</div>
		<div style="border: 1px solid;width: 550px" id="payment">
		<form name="form2" method="post" action="payment.php">
			<table width="650px" height="250px">
				<caption> <h3 style="padding-right: 100px">Pay with Debit Card </h3></caption>
				<tr><td>Country</td>  	<td>
											<select name="slist">
												<script type="text/javascript">
													var states = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");

														for(var i=0; i<states.length; i++) 
															document.write("<option value=\""+states[i]+"\">"+states[i]+"</option>");
												</script>
											</select>  
					
										</td>
				</tr>
				<tr><td>Card number</td><td><input type="text" name="card" /></td></tr>
				<tr><td>Payment Types</td><td><input type="radio" id="radio1" name="radios" value="all" checked>
   			<label for="radio1"> &nbsp;</label>
		<input type="radio" id="radio2" name="radios"value="false">
  			<label for="radio2"> &nbsp;</label></td></tr>
				<tr><td>Expiration date</td><td><input type="text" name="mm" value="mm"/><input type="text" name="yy" value="YY" /></td></tr>
				<tr><td>CSC</td><td><input type="text" name="csc" /></td></tr>
				
				<tr><td></td><td><input type="submit" value="Proceed to Checkout" id="checkout" name="checking"/></td></tr>
				
			</table>
		
			
		</form>
			<?php 
			include "paymentgateway.php";
			if(isset($_POST['checking'])){	
			$paymentee = $_GET['type'];
			if($paymentee == "game"){		
					echo $name;
					echo $email;
					echo $category;
					echo $price;
		
					$name = $_POST['name'];
					$email = $_POST['email'];
					$category = $_POST['category'];
					$price = $_POST['price'];
					mysql_query("INSERT INTO history VALUES('$name','$category','$email','$price')");
					echo "<script>window.location.assign('success.php?type=game')</script>";
			}
			if($paymentee == "acc"){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$price = $_POST['price'];
				mysql_query("INSERT INTO history VALUES('$name','','$email','$price')");
				echo "<script>window.location.assign('success.php?type=acc')</script>";
			}
					
			}	
					
	
					
			?>
		</div>
		<?php 
			include "footer.php";
		
		?>
	</body>
</html>