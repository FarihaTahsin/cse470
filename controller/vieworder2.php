<?php 
session_start();
require_once '../model/db_connect.php';
$sql="select * from orders where user_name='".$_SESSION['username']."';";
$result=mysqli_query($conn, $sql);
$tuples=mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Order(s)</title>
    <link rel="stylesheet" href="../view/css/style2.css">
</head>
<body>
<?php include ('../view/header.php');?>

<br> <br> <br>
<table class ="tbl-full">
  <tr>
     <th>Burger Name</th>
     <th>Order ID</th>
     <th>Date</th>
     <th>Time</th>
     <th>Status</th>
  </tr>

  <?php 
    //get all the orders from database
    $sql = "SELECT * FROM orders";

    //execute query
    $res = mysqli_query($conn, $sql);

    //count rows
    $count = mysqli_num_rows($res);

    if($count >0)
    {
        //order available
        while($row = mysqli_fetch_assoc($res))
        {
            // get all the order details
            $name = $row['name'];
            $order_id = $row['order_id'];
            $date = $row['date'];
            $time = $row['time'];
            $Status = $row['Status'];
            
            ?>

           <tr>
            <td><?php echo $name; ?></td>
             <td><?php echo $order_id; ?></td>
             <td><?php echo $date; ?></td>
             <td><?php echo $time; ?></td>
             <td><?php echo $Status; ?></td>

             
             <td>
                <a href =<?php echo "../controller/updatestatus.php?order_id=".$order_id; ?> class = "btn brand z-depth-0">update</a>
            </td>
        </tr>  
         <?php
        }
    }
    else
    {
      // Order not available
      echo "<tr><td colpan ='12' class  ='error'> Orders Not Available </td></tr>";
    }
    ?>

</table>
</body>

</html>