<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');

include('dbcon.php');

//$data = json_decode(file_get_contents("php://input", true));

//$p_id = $data['pid'];

$sql = "SELECT * FROM student";
$res = mysqli_query($con,$sql) or die("SQL Query Failed.");

if(mysqli_num_rows($res) > 0){
$output = mysqli_fetch_all($res, MYSQLI_ASSOC);
echo json_encode($output);

}else{
echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}

?>
