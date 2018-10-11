<?php
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	$username = stripcslashes($username)
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("restaurantdb");
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'") 
			or die("Failed to query database".mysql_error());
			
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password){
		echo "Login success!!! Welcome " .$row['username'];
		}
		else{
		echo "Failed to Login!";
		}
		
?>
	
<!DOCTYPE html>



<html lang="de">
<head>
  <title>Login Page</title>
  <link rel = "stylesheet" type = "text/css" href ="style.css" >
  <link href="loginkueche.css" rel="stylesheet">
  </head>
  
  <body>
	<div id = "frm">
		<form action ="bestellung.php" method = "POST">
		<p> 
		<label> Username: </label>
		<input type = "text" id = "user" name  = "user" />
		</p>

		<p> 
		<label> Password: </label>
		<input type = "password" id = "pass" name ="pass" />
		</p>
		
		<p> 
		<input type = "submit" id = "btn" value = "Login" />
		</p>
		</form>
	</div>
  </body>
 </html>