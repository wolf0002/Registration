<?php

session_start();
$host ="localhost";
$user="root";
$password="";
$db="data";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['username']))
{
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql= "SELECT * From register Where username='$uname' AND password='$password'";
	$result = mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result);
	
	if($rowcount>0){

		echo "your connection succesfull logged in";
		$_SESSION['name']=$uname;
		header('location:first.php');
	}
	else{
		echo "PLEASE CHECK AGAIN!";
		
	}
}

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Form</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
<h1 align="center"><u>LOGIN PAGE</u></h1><br>
 <form action="#" method="POST">
  <table align="center" border="4 px"><b>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" placeholder="Enter your username" prequired="required"></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" placeholder="Enter your password" required="required"></td>
 </tr>
</table>
<table align="center">
 <tr>
 <td>
  <button type="Submit" class="btn btn-primary">LOGIN</button></td>
  <td>
  If not register, click <a href="form.php">Register</a></td>
   </tr></b>
   </table>
</form>
</body>
</html>