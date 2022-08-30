<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

error_reporting(0);
$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$gender = $data['gender'];
$dob = $data['dob'];
$country = $data['country'];

include('dbcon.php');

$sql = "UPDATE `student` SET name ='{$name}', gender = '{$gender}', dob = '{$dob}', country = '{$country}' WHERE id = {$id}";

if(mysqli_query($con,$sql)){

echo json_encode(array('message' => 'Record Updated.', 'status' => true));

}else{

echo json_encode(array('message' => 'Record not Updated', 'status' => false));
	
}
