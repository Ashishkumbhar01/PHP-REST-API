<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');

error_reporting(0);
$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$mobile = $data['mobile'];
$email = $data['email'];

include('dbcon.php');

$sql = "INSERT INTO `contacts`(`name`, `mobile`, `email`) VALUES ('{$name}', '{$mobile}', '{$email}')";

if(mysqli_query($con,$sql)){

	echo json_encode(array('message' => 'Record Inserted', 'status' => true));

}else{

echo json_encode(array('message' => 'Record not inserted', 'status' => false));
}

?>
