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
    <td>Roll No: :</td>
    <td><input type="text" name="rollno" ></td>
   </tr>
   <tr>
    <td>Branch :</td>
    <td><input type="text" name="branch" ></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" >Male
     <input type="radio" name="gender" value="f" >Female
     <input type="radio" name="gender" value="o" >Others
    </td>
   </tr>
   <tr>
    <td>Year :</td>
    <td><input type="text" name="year" ></td>
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
    <td>Hosteller :</td>
    <td>
     <input type="radio" name="hosteller" value="m" >Yes
     <input type="radio" name="hosteller" value="f" >No
    </td>
   </tr>
   <tr>
    <td>
  <button type="Submit" class="btn btn-primary">Submit</button></td>
   </tr>
  </table>
 </form>
</body>
</html>