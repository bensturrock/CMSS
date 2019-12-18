<?php

	function get_manufacturers($manufacturer_id)
	{
	global $connection;
	$query="SELECT * FROM manufacturers";
	if($manufacturer_id != 0)
	{
		$query=$query." WHERE manufacturer_id=".$manufacturer_id." LIMIT 1";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result))
	{
		$response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}
	
	function insert_manufacturer()
	{
		global $connection;
 
		$data = json_decode(file_get_contents('php://input'), true);
		$manufacturer_name=$data["manufacturer_name"];
		$manufacturer_desc=$data["manufacturer_desc"];
		$manufacturer_logo=$data["manufacturer_logo"];
		echo $query="INSERT INTO manufacturers SET manufacturer_name='".$manufacturer_name."', manufacturer_desc='".$manufacturer_desc."', manufacturer_logo='".$manufacturer_logo."'";
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Manufacturer Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Manufacturer Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function update_manufacturer($manufacturer_id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$manufacturer_name=$post_vars["manufacturer_name"];
		$manufacturer_desc=$post_vars["manufacturer_desc"];
		$manufacturer_logo=$post_vars["manufacturer_logo"];
		$query="UPDATE manufacturers SET manufacturer_name='".$manufacturer_name."', manufacturer_desc='".$manufacturer_desc."', manufacturer_logo='".$manufacturer_logo."' WHERE manufacturer_id=".$manufacturer_id;
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Manufacturer Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Updating of the Manufacturer Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
	
	function delete_manufacturer($manufacturer_id)
{
	global $connection;
	$query="DELETE FROM manufacturers WHERE manufacturer_id=".$manufacturer_id;
	if(mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'Manufacturer Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Manufacturer Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
}
	
?>