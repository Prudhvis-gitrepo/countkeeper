<?php 
$con = mysqli_connect("localhost","root","","countkeeper");
if(!$con){
	die("Connection failed: ".mysqli_connect_error());
}
?>