<?php
//error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsiveform";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect){
	echo "connection ok";
}
else{
	echo "connection failed".mysql_connect_error();
}
?>