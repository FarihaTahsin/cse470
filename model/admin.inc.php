<?php
session_start();
require_once '../model/db_connect.php';
if(isset($_POST['bttn1'])){
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];

	if(empty($username) || empty($pwd)){
		header('location: ../controller/admin.php?error=emptyinput');
		exit();
	}
	$sql="select * from admin_panel where Admin_Name='".$username."' and password='".$pwd."';";
	$result=mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)!=0){
		session_start();
		$_SESSION['username']=$username;
		header('location: ../controller/index2.php');
		exit();
	}else{
		echo "WRONG PASSWORD OR USERNAME!!!!!!!!!!!!!!!!!!!!!!!!";
		exit();
	}
}