<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
  <h1 align="center"><u>Registration Form</u></h1>
 <form action="registration.php" method="POST">
  <table align="center" style="margin-top: 50px;">
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" ></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" ></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" >Male
     <input type="radio" name="gender" value="f" >Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" ></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
     <input type="phone" name="phone" >
    </td>
   </tr>
   <tr>
    <td>
  <button type="Submit" class="btn btn-primary">Submit</button></td>
  <td><a href="login.php">Login</a> if already Registered</td>
   </tr>
  </table>
 </form>
</body>
</html>