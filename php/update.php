<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

error_reporting(0);
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$mobile = $data['mobile'];
$email = $data['email'];

include('dbcon.php');

$sql = "UPDATE `contacts` SET name ='{$name}', mobile = '{$mobile}', email = '{$email}' WHERE id = {$id}";

if(mysqli_query($con,$sql)){

echo json_encode(array('message' => 'Record Updated.', 'status' => true));

}else{

echo json_encode(array('message' => 'Record not Updated', 'status' => false));
	
}
