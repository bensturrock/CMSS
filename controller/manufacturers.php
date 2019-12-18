<?php
// Connect to database
	include("model/connection.php");
	
	$db = new dbObj();
	$connection =  $db->getConnstring();
	
	include("model/library.php") ;
 
	$request_method=$_SERVER["REQUEST_METHOD"];
	
switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["manufacturer_id"]))
			{
				$manufacturer_id=intval($_GET["manufacturer_id"]);
				get_manufacturers($manufacturer_id);
			}
			else
			{
				get_manufacturers(0);
			}
			break;
		case 'POST':
			// Insert Product
			insert_manufacturer();
			break;
		case 'PUT':
		// Update Product
		$manufacturer_id=intval($_GET["manufacturer_id"]);
		update_manufacturer($manufacturer_id);
		break;	
		case 'DELETE':
		// Delete Product
		$manufacturer_id=intval($_GET["manufacturer_id"]);
		delete_manufacturer($manufacturer_id);
		break;
		 
		default:
			// Invalmanufacturer_id Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

?>