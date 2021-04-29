<?php 
session_start();
require_once '../model/db_connect.php';
$sql="select * from food_item";
$result=mysqli_query($conn, $sql);
$tuples=mysqli_fetch_all($result, MYSQLI_ASSOC);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Place order</title>
	 <link rel="stylesheet" href="../view/css/style2.css">
</head>
<body>
	<form method="post" action="../model/placeorder.inc.php">
		<fieldset>
			<legend><h1 style="color:white;">Create burger</h1></legend>

			<label for="bun" style="color:white;">Select Bun</label>
			<select name="bun">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Bun'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<label for="patty" style="color:white;">Select Patty</label>
			<select name="patty">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Patty'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<label for="salad" style="color:white;">Select Salad</label>
			<select name="salad">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Salad'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<label for="spice" style="color:white;">Select Spice</label>
			<select name="spice">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Spice'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<label for="sauce" style="color:white;">Select Sauce</label>
			<select name="sauce">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Sauce'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<label for="sides" style="color:white;">Select Sides</label>
			<select name="sides">
				<option value=""></option>
				<?php foreach($tuples as $tuple): ?>
					
					<?php 
					if($tuple['food_type']=='Sides'){
						echo "<option value='".$tuple['name']."'>".$tuple['name']."</option>";
					}
					 ?>
				<?php endforeach; ?>
			</select><br>

			<input type="text" name="bname" placeholder="Burger name"><br>

			Payment Method:
            <input type="radio" name="pm"
            <?php if (isset($pm) && $pm=="bkash") echo "checked";?>
            value="bkash">bkash
            <input type="radio" name="pm"
            <?php if (isset($pm) && $pm=="cash") echo "checked";?>
            value="cash" >Cash on delivery 
            <br>

			<input type="submit" name="bttn1" value="Place Order">
			
		</fieldset>
	</form>
	<?php 
	 	if(isset($_GET['error'])){
	 		if($_GET['error']=='emptyinput'){
	 			echo "<span>Empty Input</span>";
	 		}
	 	} 
	 	?>
	 	<a href="../view/feature4.php" >Back</a>
	 	
</body>
</html>