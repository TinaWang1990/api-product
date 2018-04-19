<?php 
header("Content-Type:application/json");
// require_once "data.php";
require_once "db.php";

function response($status,$status_message,$data){
	header("HTTP/1.1".$status);

	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;

	$json_response=json_encode($response);

	echo $json_response;
}
if(!empty($_GET['name'])){
	$name=$_GET['name'];
	$price=getItem($name);

	if(empty($price)){
		response(200,"Product not found", NULL);
	}else{
		response(200,"Product found", $price);
	}
}else{
	response(400,"Invalid Request", NULL);
}

 ?>