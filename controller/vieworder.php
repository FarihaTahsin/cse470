<?php 
session_start();
require_once '../model/db_connect.php';
$sql = "SELECT * FROM orders";
//$sql="select * from orders where user_name='".$_SESSION['username']."';";
$result=mysqli_query($conn, $sql);
$tuples=mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Order(s)</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	  <link rel="stylesheet" href="../view/css/style2.css">
</head>
<body>
	<table style="border:3px; width: 50%; text-align: center;">
		<tr>
			<th>Burger Name</th>
			<th>Order ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
		</tr>

		<?php foreach($tuples as $tuple): ?>
			<tr>
				<td><?php echo $tuple['name']; ?></td>
				<td><?php echo $tuple['order_id']; ?></td>
				<td><?php echo $tuple['date']; ?></td>
				<td><?php echo $tuple['time']; ?></td>
				<td><?php echo $tuple['Status']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<a href="../view/feature4.php" class="btn brand z-depth-4">Back</a>
</body>
</html>