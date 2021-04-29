<?php

 //echo 'hello world';
session_start();
require_once '../model/db_connect.php';
//$conn = mysqli_connect('localhost','fariha','Harry786Potter','burgershop');



$sql = 'SELECT * FROM food_item ORDER BY food_type';
$result = mysqli_query($conn, $sql);
$food_item = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html>
  
  <head>
	<title>
		Burgersss
	</title>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    

</head>

<body class="white">
	<nav class= "brown z-depth-2">
		<div class="container">
			<h1 style="font-size:350%">Menu</h1>
			<li><a href="../controller/placeorder.php" class="btn brand z-depth-4">Purchase</a></li>
			<ul id="nav-mobile" class="right hide-on-small-and-down">
			    
		    </ul>
		</div>
	</nav>		
    
    <div class="container">
    	<div class="row">
    		<?php foreach($food_item as $food_item){ ?>
    			<div class="col s6 md3">
    				<div class="card z-depth-0">
    					
    					<h6><b><?php echo htmlspecialchars($food_item['food_type']); ?></b></h6>
    					<div><?php echo htmlspecialchars($food_item['name']); ?></div>
    					<div><h6><b>price</b></h6><?php echo htmlspecialchars($food_item['price']); ?></div>
    					<div><h6><b>quantity</b></h6><?php echo htmlspecialchars($food_item['quantity']); ?></div>
    				</div>
    					
    			</div>
    	    <?php } ?>
    	</div>
    </div>


    <footer class= "section">
    	<div class="center grey-text">Copyright 2020 Burgersss</div>
    </footer>	
</body>
</html>
