<?php
	$url = "https://mayar.abertay.ac.uk/~1806055/controller/manufacturers.php?manufacturer_id=67" ;
	$curl = curl_init($url) ;
  	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");                                                                                                                                  
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                                                                                                         
  	$resp = curl_exec($curl) ;
  	echo "Finished :" ;
  	echo $resp ;
  	if (!$resp) {die('Error : "'.curl_error($curl).'" - Code: '.curl_errno($curl)); }
  	curl_close($curl) ;	
?>
