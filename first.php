<?php
session_start();
if(!isset($_SESSION['name']))
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MY PORTFOLIO</title>
	<style>
		   h1 {
		   	color:black;
		   	text-align: center;
		   }
		   table, th, td {
             border: 5px solid black;
             border-collapse: collapse;
            }
	</style>
</head>	   
<body>
	<h1>WELCOME
	<?php
	echo $_SESSION['name'];
	?></h1>
		 <h2 style="text-align: right;"><a href="logout.php">LOGOUT</a></h2>
	<br>
	<h1 style="font-size:30px"><u>PORTFOLIO</u></h1>
	<hr size="20" style="background-color: lightblue;">
	<p>
		<img src="_DSC0063.jpg" alt="MY PIc" title="Divyansh" style ="width:150px;height:150px;float:right;">
	</p>

	<p style="font-size:25px;color:black;background-color: lightgreen;">
		<b>
		NAME:	 DIVYANSH GUPTA<br>
		AGE:	 19<BR>
		GENDER:  MALE<BR>
		EMAIL:   guptadivyansh200@gmail.com<br>
		CONTACT: 7060335724	
		</b>
		<br>
		<hr size="20" style="background-color: lightblue;">
	</p>
	<h1 align="center"style="background-color: yellow;font-size:30px"><u>QUALIFICATIONS</u></h1>
	<hr size="20" style="background-color: lightblue;">
	<img src="C:\Users\Divyansh\Pictures\grad.jpg" alt="MY PIc" style ="width:175px;height:120px;float:right;">
	<img src="C:\Users\Divyansh\Pictures\grad.jpg" alt="MY PIc" style ="width:175px;height:120px;float:left;">
    <table align=center style="width: 70%;font-size:20px;text-align: center;background-color: lightpink">
    	<tr style="background-color: lightgreen;">
    	<b> <th>DEGREE</th>
    	<th>BOARD</th> 
    	<th>PERCENTAGE</th>
    	</b></tr>
    	<tr>
    	<td>BTECH 1 YEAR</td>
    	<td>AKTU</td>
    	<td>75.11</td>
    	</tr>
    	<tr>
    	<td>12</td>
    	<td>CBSE</td>
    	<td>91.6</td>
  		</tr>
    	<tr>
    	<td>10</td>
    	<td>CBSE</td>
    	<td>CGPA-10</td>
    	</tr>
	</table>
	<hr size="20" style="background-color: lightblue;">
	<h1 align="center"style="background-color: yellow;font-size:30px"><u>WORKSHOPS AND INTERNSHIPS</u>
	</h1>
	<hr size="20" style="background-color: lightblue;">
	<br>
	<img src="C:\Users\Divyansh\Pictures\iot.jpg" alt="iot" style ="width:175px;height:120px;float:right;">

	<UL style="font-size:25px;background-color: #E74C3C">

		<li><b>Internship on IoT(Internet of things) and Embedded.</li>
		<li>INNOVATION-19(SAE)</li></b>
		<br>
	</UL>
	<hr size="20" style="background-color: lightblue;">

	<h1 align="center"style="background-color: yellow;font-size:30px"><u>PROJECTS</u></h1>
	<hr size="20" style="background-color: lightblue;">

	<UL style="font-size:25px;background-color: #DC7633">
		<img src="C:\Users\Divyansh\Pictures\bot.jpg" alt="bot" style ="width:175px;height:120px;float:right;">
		<img src="C:\Users\Divyansh\Pictures\watch.jpg" alt="watch" style ="width:175px;height:120px;float:right;">
		<b><LI>Line following Bot.</LI>
		<li>Watch on LED.</li>
		<li>Library Management System.(using C++)</li></b>
		<br>
	</UL>
		<hr size="20" style="background-color: lightblue;">
		<h1 align="center"style="background-color: yellow;font-size:30px"><u>CONTACT ME</u></h1>
	<h3>AJAY KUMAR GARG ENGINEERING COLLEGE
		<br>
	GHAZIABAD
	<a href="https://www.facebook.com/" target="_blank">
	<img src="C:\Users\Divyansh\Pictures\fb.jpg" alt="watch" style ="width:100px;height:100px;float:right;"></a>
	</h3>
</body>
</html>