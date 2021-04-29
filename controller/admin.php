<?php 
session_start();
require_once '../model/db_connect.php';

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 	 <link rel="stylesheet" href="../view/css/style.css">
 	 <!--https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css-->
 </head>
 <body>
 	<div class= "loginBox">
 		<img src="../view/images/user.png" class="users">
	 <form action="../model/admin.inc.php" method="post">
	 	<fieldset>
	 		<legend>Admin</legend>
	 	<p>Name</p>
	 	<input type="text" name="username" placeholder="name">
	 	<p>Password</p>
	 	<input type="password" name="pwd" placeholder="****">
	 	<input type="submit" name="bttn1" value='Sign In'>
	 
	 	</fieldset>
	 	</form>
	 	<?php 
	 	if(isset($_GET['error'])){
	 		if($_GET['error']=='emptyinput'){
	 			echo "<span>Empty Input</span>";
	 		}
	 	} 
	 	?>

 </body>
 </html>