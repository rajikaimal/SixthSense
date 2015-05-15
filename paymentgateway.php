<?php 
	function paymentGateway(){
		echo "sdsd";
		if(isset($_POST['checkout'])){	
			$country = $_POST['slist'];
			$cardNo = $_POST['card'];
			$paymentType = $_POST['radios'];
			$empDate = $_POST['mm'];
			$csc = $_POST['csc'];
			$encryptedcardNo = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($cardNo))));
			$encryptedCountry = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($country))));
			$encryptedType = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($paymentType))));
			$encryptedDate = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($empDate))));
			$encryptedCsc = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($csc))));
	
			
		
		}
	}
	
	
	
	
?>
