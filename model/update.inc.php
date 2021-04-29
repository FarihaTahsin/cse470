<?php 
session_start();
require_once '../model/db_connect.php';
if(isset($_POST['submit'])){
  $sql="update orders set Status='".$_POST['Status']."' where order_id =".$_SESSION['order_id'].";";
  echo $sql;
  if((mysqli_query($conn, $sql))){
  header('location: ../controller/index2.php');
  exit();
  }else{
    echo "Something went Wrong!";
    exit();
  }
}