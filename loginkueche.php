<?php 
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("restaurantdb");

$result = mysql_query("select * from users where username = '&username' and password = '$password'")
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
<html>
<head>
<title>Login Seite</title>
<link rel="stylesheet" type="text/css" href="loginkueche.css">
</head>

<body>
	<div id="frm">
		<form action="/restaurant/tischBestellungen.jsp" method="POST">

			<p>
				<label>Username:</label> <input type="text" id="user" name="user" />
			</p>
			<p>
				<label>Password:</label> <input type="text" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" name="Login" />
			</p>

		</form>
	</div>

</body>

</html>

