
<?php
session_start();
?>

<?php
$uname = $_POST['uname'];
$password = $_POST['password'];
$session_start();


$con=mysqli_connect("localhost", "root", "", "restaurantdb");
$restult=mysqli_query($con, "SELECT * FROM `login_info` WHERE `uname`= '$uname' && `password` = '$password'");
$count = mysqli_num_rows($result);

if($count == 1) {
echo "Login success";
$SESSION['log'] = 1; 
header("refresh:2,url=bestellung.php"); // Ändern

}
else{
echo "incorrect info";
header("refresh:2;url =loginkueche.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<body>
<form method = "POST" action = "bestellung.php">   // Ändern 
	Enter Username: <input type ="text" name = "uname" > <br><br>
	Enter Password: <input type ="text" name = "password" > <br>
	<input type = "submit" value = "login" >
	
</form>

	
</body>

</html>

<? php
session_destroy();


?>