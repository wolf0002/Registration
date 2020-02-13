<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: lightblue;">

    <?php if(session()->has('success')): ?>
    {
    <i><?php echo e(session('success')); ?></i>
    <?php echo e(session()->forget('success')); ?>;
    }
    <?php endif; ?>

  <h1 align="center"><u>Registration Form</u></h1>
 <form action="/store" method="POST">
  <?php echo csrf_field(); ?>
  <table align="center" style="margin-top: 50px;">
   <tr>
    <td>Name :</td>
    <td><input type="text" name="name" ></td>
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
     <input type="radio" name="gender" value="male" >Male
     <input type="radio" name="gender" value="female" >Female
     <input type="radio" name="gender" value="other" >Others
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
     <input type="radio" name="hosteller" value="yes" >Yes
     <input type="radio" name="hosteller" value="no" >No
    </td>
   </tr>
   <tr>
    <td>
  <button type="Submit" class="btn btn-primary">Submit</button></td>
   </tr>
  </table>
 </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\lapp\resources\views/pages/registration.blade.php ENDPATH**/ ?>