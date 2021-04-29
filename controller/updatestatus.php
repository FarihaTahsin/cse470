<?php 
session_start();
require_once '../model/db_connect.php';
$_SESSION['order_id']= $_GET['order_id'];

 ?>
<!DOCTYPE html>
<html>
<head>
   <title> Order Status Update</title>
    <link rel="stylesheet" href="../view/css/style2.css">
</head>

<?php include ('../view/header.php');?>
<div class = "main-content">
  <div class = "wrapper">
    <h2> Update Status </h2>
    <br>
    
    <form action="../model/update.inc.php" method ="post" >

      <label for="Status">New Status:</label>
      <select name="Status" style="display: inline-block;">
      <option value="">update status</option>
      <option value="completed">Completed</option>
      <option value="ordered">Ordered</option>
      <option value="picked-up">Picked-up</option>
      </select>
      <input type="submit" name="submit" class ="btn brand2 z-depth-0" value="Update">
      
    </form>
    <br>
  </div>
</div>

</html>
