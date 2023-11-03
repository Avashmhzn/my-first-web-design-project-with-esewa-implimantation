<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_index.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_index.php">HOME</a>
         <a href="admin_products.php">PRODUCT</a>
         <a href="admin_orders.php">ORDER</a>
         <a href="admin_users.php">USERS</a>
         <a href="admin_contacts.php">MESSAGES</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <a href="logout.php" class="fa-sharp fa-solid fa-power-off">Logout</a>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
      </div>
   </div>

</header>