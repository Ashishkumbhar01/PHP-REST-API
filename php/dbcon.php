<?php
$server = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "api";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
die("Connection Error" .mysqli_connect_error());
}
?>
