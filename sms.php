<?php
	   $username = "lukatoni";
	   $password = "lukatoni";
	   $mobiles = '255769381011';
	   $sms = 'Thank you for your kind purchase. For any query, please contact our hotline number: 01969604444.';
	   $originator = '255659260154';
	
	echo sendSMS($username, $password, $mobiles, $sms, $originator);
	
	function sendSMS($username, $password, $phone, $message, $originator)
	{	
		// make sure passed string is url encoded
		$message = rawurlencode($message);
		
		$url = "http://clients.muthofun.com:8901/esmsgw/sendsms.jsp?user=$username&password=$password&mobiles=$phone&sms=$message&unicode=1";			

		$c = curl_init(); 
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $url); 
		$response = curl_exec($c); 
		return $response;
	}

?>
