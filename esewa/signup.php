<?php

include 'connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $error[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $error[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $error[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css">
    <title>SIGN UP -ONLINE SHOES SHOPPING</title>
</head>
<body>

<div class="form-container">
   <form action="" method="post">
   <?php
      if(isset($error)){
         foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
         }; 
      };
   ?>
      <img src="uploaded_img/mhzn.PNG" alt="mhzn" class="logo img-fluid">
      <br>
      <h3>SignUp Now</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
      <select name="user_type" class="box">
         <option value="user">user</option>
      </select>
      <input type="submit" class="btn btn-primary form_btn" value="SIGNUP" name="submit">
      <br>
      <hr class="mb-4">
      <p>IF U HAVE ACCOUNT 
        <a href="login.php">CLICK HERE TO LOGIN</a>
      </p>
    </form>
  </div>
  <script src="js/jquery.min.js"></script> 
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>