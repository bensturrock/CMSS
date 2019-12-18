<?php
	$url = "https://mayar.abertay.ac.uk/controller/manufacturers.php" ;
	$data = '{"manufacturer_name": "SEAT", "manufacturer_logo": "seat.png", "manufacturer_desc" : "23421"}' ;
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                                                                  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                      
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
    	'Content-Type: application/json',                                                                                
    	'Content-Length: ' . strlen($data))                                                                       
	);                 
  	$resp = curl_exec($curl) ;
  	echo "Finished :" ;
  	echo $resp ;
  	if (!$resp) {die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); }
  	curl_close($curl) ;	
?>