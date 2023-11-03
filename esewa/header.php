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
   <div class="header-1">
      <div class="flex">
      <h1>Online shoes shopping </h1>
      <p>Welcome to our site.</p>
      
      </div>
   </div>

   <div class="header-2">
      <div class="flex">
         <img src="uploaded_img/mhzn.png" width="75px" >
         <a href="index.php" class="logo">MHZNMALISHOES</a>
         <nav class="navbar">
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="shop.php">SHOP</a>
            <a href="order.php">ORDERS</a>
         </nav>

         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
            <a href="logout.php" class="fa-sharp fa-solid fa-power-off"></a>
         </div>

         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
         </div>
      </div>
   </div>

</header>