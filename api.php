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

// if(!empty($_GET['name'])){
// 	$name=$_GET['name'];
// 	$price=getItem($name);

// 	if(empty($price)){
// 		response(200,"Product not found", NULL);
// 	}else{
// 		response(200,"Product found", $price);
// 	}
// }else{
// 	response(400,"Invalid Request", NULL);
// }


//select-updata-delete-add

// $sel_p_name=$_GET['sel_p_name'];



// $upd_p_name=$_GET['upd_p_name'];
// $upd_p_q_cur=$_POST['upd_p_q_cur'];

// $del_p_id=$_POST['del_p_id'];

// $add_p_id=$_POST['add_p_id'];
// $add_p_name=$_POST['add_p_name'];
// $add_p_quantity=$_POST['add_p_quantity'];

if(!empty($_GET['name'])){
	$name=$_GET['name'];
	$x=deleteItem($name);
	
	if(empty($x)){
		response(200,"Product not found", NULL);
	}else{
		response(200,"Product found", $x);
	}

}else{
	response(400,"Invalid Request", NULL);
}


 ?>