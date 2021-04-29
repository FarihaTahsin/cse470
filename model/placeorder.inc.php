<?php 
session_start();
require_once '../model/db_connect.php';
if(isset($_POST['bttn1'])){
	$bname= $_POST['bname'];
	$bun= $_POST['bun'];
	$patty= $_POST['patty'];
	$salad= $_POST['salad'];
	$sauce= $_POST['sauce'];
	$sides= $_POST['sides'];
	



	if(empty($_POST['bname']) || empty($_POST['bun']) || empty($_POST['patty']) || empty($_POST['salad']) || empty($_POST['sauce']) || empty($_POST['sides']) || empty($_POST['spice'])){
		header('location: ../controller/placeorder.php?error=emptyinput');
		exit();
	}
	$sql= "insert into orders(name, user_name,bun,patty, salad, sauce,sides) values('".$bname."', '".$_SESSION['username']."','".$bun."', '".$patty."' , '".$salad."' , '".$sauce."' ,'".$sides."');";
	mysqli_query($conn, $sql);
	header('location: ../view/feature4.php');
	exit();
}