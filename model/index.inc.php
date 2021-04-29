<?php
session_start();
require_once '../model/db_connect.php';
if(isset($_POST['bttn1'])){
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];

	if(empty($username) || empty($pwd)){
		header('location: ../controller/index.php?error=emptyinput');
		exit();
	}
	$sql="select * from users where User_Name='".$username."' and Password='".$pwd."';";
	$result=mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)!=0){
		session_start();
		$_SESSION['username']=$username;
		header('location:../view/feature4.php');
		exit();
	}else{
		echo "WRONG PASSWORD OR USERNAME!!!!!!!!!!!!!!!!!!!!!!!!";
		exit();
	}
}
