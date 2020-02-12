<?php

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'data');


$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$s="SELECT * from register where username= '$username'";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);


if($num>0)
{
	echo "Username already taken";
	
}
	
else
{

     $reg = "INSERT into register values('$username', '$password', '$gender', '$email', '$phone')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
    header('location:login.php');
    session_destroy();
}
}
else{

 echo "All field are required";
}
?>




