<!DOCTYPE HTML>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">
  <h1 align="center"><u>Admin Login</u></h1>
 <form action="/store" method="POST">
  <?php echo csrf_field(); ?>
  <table align="center" style="margin-top: 50px;">
   <tr>
    <td>Username :</td>
    <td><input type="text" name="username" ></td>
   </tr>
   <tr>
    <td>Roll No :</td>
    <td><input type="password" name="password" ></td>
   </tr>
   <tr>
    <td>
  <button type="Submit" class="btn btn-primary">Login</button></td>
   </tr>
  </table>
 </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lapp\resources\views/pages/adminlogin.blade.php ENDPATH**/ ?>