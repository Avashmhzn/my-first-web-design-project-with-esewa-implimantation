<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_index.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:index.php');

      }
   }else{
    $error[] = 'incorrect email or password';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/loginstyle.css">

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
      <h3>login now</h3>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="signup.php">SignUp</a></p>
   </form>

</div>

</body>
</html>


