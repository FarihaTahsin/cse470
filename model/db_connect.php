<?php 

$conn = mysqli_connect('localhost','root','','burgershop');
//check connection
if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}